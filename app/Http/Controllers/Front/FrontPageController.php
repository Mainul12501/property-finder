<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Blog;
use App\Models\Company;
use App\Models\Property;
use App\Models\PropertyAdsType;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FrontPageController extends Controller
{
    protected $properties ;
    protected $property ;
    protected $propertyTypes = [];

    public function home ()
    {
        return view('front.home.home',[
            'properties'    => Property::where('status', 1)->latest()->take(4)->get(),
            'latestBlogs'   => Blog::where('blog_category_id', 2)->where('status', 1)->latest()->take(5)->get(),
        ]);
    }

    public function buyPage ()
    {
        $this->properties = Property::where('property_ads_type_id', 1)->where('status',1)->with('subImages')->get();
        $propertyTypeIdArray = [];
        foreach ($this->properties as $property)
        {
//            $propertyTypeIdArray[] = $property->property_type_id;
            array_push($propertyTypeIdArray,$property->property_type_id);
        }
        $propertyTypeIds = array_filter($propertyTypeIdArray);
        foreach ($propertyTypeIds as $propertyTypeId)
        {
            $propertyTypes[] = PropertyType::where('id', $propertyTypeId)->with('singleProperty')->first();
        }
//        return $this->properties;
        return view('front.buy.buy',[
            'properties'    => Property::where('property_ads_type_id', 1)->where('status',1)->with('subImages')->paginate(10),
            'propertyTypes'    => $propertyTypes,
        ]);
    }

    public function rent ()
    {
        $this->properties = Property::where('property_ads_type_id', 2)->where('status',1)->get();
        $propertyTypeIdArray = [];
        foreach ($this->properties as $property)
        {
//            $propertyTypeIdArray[] = $property->property_type_id;
            array_push($propertyTypeIdArray,$property->property_type_id);
        }
        $propertyTypeIds = array_filter($propertyTypeIdArray);
        foreach ($propertyTypeIds as $propertyTypeId)
        {
            $propertyTypes[] = PropertyType::where('id', $propertyTypeId)->with('singleProperty')->first();
        }
        return view('front.rent.rent',[
            'properties'    => $this->properties,
            'propertyTypes'    => $propertyTypes,
        ]);
    }

    public function commercialRent ()
    {
        $this->properties = Property::where('property_ads_type_id', 3)->where('status',1)->get();
        $propertyTypeIdArray = [];
        foreach ($this->properties as $property)
        {
//            $propertyTypeIdArray[] = $property->property_type_id;
            array_push($propertyTypeIdArray,$property->property_type_id);
        }
        $propertyTypeIds = array_filter($propertyTypeIdArray);
        foreach ($propertyTypeIds as $propertyTypeId)
        {
            $propertyTypes[] = PropertyType::where('id', $propertyTypeId)->with('singleProperty')->first();
        }
        return view('front.commercial.commercial',[
            'properties'    => $this->properties,
            'propertyTypes'    => $propertyTypes,
        ]);
    }

    public function newProjects ()
    {
        return view('front.newProject.newProject',[
            'properties'    => Property::orderBy('id','DESC')->paginate(10),
            'totalProperties'    => count(Property::orderBy('id','DESC')->get()),
        ]);
    }

    public function findCompanyAgents ()
    {
        return view('front.findCompanyAgents.findCompanyAgents',[
            'agents'    => Agent::where('status', 1)->with('company')->paginate(12),
            'companies'    => Company::where('status', 1)->with('agents')->paginate(12),
            'propertyAdsTypes'  => PropertyAdsType::where('status', 1)->get(),
        ]);
    }

    public function housesPrice ()
    {
        return view('front.housesPrice.housesPrice');
    }

    public function rentBuyCalculator ()
    {
        return view('front.rentBuyCalculator.rentBuyCalculator');
    }

    public function blog ()
    {
        return view('front.blog.blog', [
            'blogs'     => Blog::where('status', 1)->where('blog_category_id', 2)->paginate(10),
            'popularBlogs'  => Blog::orderBy('hit_count', 'DESC')->where('blog_category_id', 2)->take(3)->get(),
            'latestBlogs'  => Blog::latest()->where('blog_category_id', 2)->take(3)->get(),
        ]);
    }

    public function communityGuide ()
    {
        return view('front.blog.community-blog', [
            'blogs'     => Blog::where('status', 1)->where('blog_category_id', 1)->paginate(10),
            'popularBlogs'  => Blog::orderBy('hit_count', 'DESC')->where('blog_category_id', 1)->take(3)->get(),
            'latestBlogs'  => Blog::latest()->where('blog_category_id', 1)->take(3)->get(),
        ]);
    }

    public function renterBlog ()
    {
        return view('front.blog.renter-blog', [
            'blogs'     => Blog::where('status', 1)->where('blog_category_id', 3)->paginate(10),
            'popularBlogs'  => Blog::orderBy('hit_count', 'DESC')->where('blog_category_id', 3)->take(3)->get(),
            'latestBlogs'  => Blog::latest()->where('blog_category_id', 3)->take(3)->get(),
        ]);
    }

    public function buyerBlog ()
    {
        return view('front.blog.buyer-blog', [
            'blogs'     => Blog::where('status', 1)->where('blog_category_id', 4)->paginate(10),
            'popularBlogs'  => Blog::orderBy('hit_count', 'DESC')->where('blog_category_id', 4)->take(3)->get(),
            'latestBlogs'  => Blog::latest()->where('blog_category_id', 4)->take(3)->get(),
        ]);
    }

    public function buildingReviews ()
    {
        return view('front.buildingReviews.buildingReviews');
    }

    public function propertyDetails ($propertyId)
    {
        $this->property = Property::findOrFail($propertyId);
        $this->property->hit_count = $this->property->hit_count + 1;
        $this->property->save();
        $updated_at = Carbon::parse($this->property->created_at);
        $current    = Carbon::parse(Carbon::now());
        $totalDuration = $updated_at->diffInDays($current);
        return view('front.property.details', [
            'property'      => $this->property,
            'posted_time'   => $totalDuration,
            'relatedProperties'   => Property::where('location_city', $this->property->location_city)->where('status', 1)->take(3)->get(),
        ]);
    }
}
