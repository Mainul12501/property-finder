<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\SEO;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    protected $blogs;
    protected $blog;
    protected $properties;

    public function blogDetails ($id, $slug)
    {
        $this->blog = Blog::findOrFail($id);
        $this->blog->hit_count = $this->blog->hit_count + 1;
        $this->blog->save();
        return view('front.blog.details',[
            'blog'  => $this->blog,
            'popularBlogs'  => Blog::orderBy('hit_count', 'DESC')->where('blog_category_id', 2)->take(3)->get(),
            'latestBlogs'  => Blog::latest()->where('blog_category_id', 2)->take(3)->get(),
        ]);
    }

    public function communityBlogDetails ($id, $slug)
    {
        $this->blog = Blog::findOrFail($id);
        $this->blog->hit_count = $this->blog->hit_count + 1;
        $this->blog->save();
        return view('front.blog.details',[
            'blog'  => $this->blog,
            'popularBlogs'  => Blog::orderBy('hit_count', 'DESC')->where('blog_category_id', 1)->take(3)->get(),
            'latestBlogs'  => Blog::latest()->where('blog_category_id', 1)->take(3)->get(),
        ]);
    }

    public function renterBlogDetails ($id, $slug)
    {
        $this->blog = Blog::findOrFail($id);
        $this->blog->hit_count = $this->blog->hit_count + 1;
        $this->blog->save();
        return view('front.blog.details',[
            'blog'  => $this->blog,
            'popularBlogs'  => Blog::orderBy('hit_count', 'DESC')->where('blog_category_id', 3)->take(3)->get(),
            'latestBlogs'  => Blog::latest()->where('blog_category_id', 3)->take(3)->get(),
        ]);
    }

    public function buyerBlogDetails ($id, $slug)
    {
        $this->blog = Blog::findOrFail($id);
        $this->blog->hit_count = $this->blog->hit_count + 1;
        $this->blog->save();
        return view('front.blog.details',[
            'blog'  => $this->blog,
            'popularBlogs'  => Blog::orderBy('hit_count', 'DESC')->where('blog_category_id', 4)->take(3)->get(),
            'latestBlogs'  => Blog::latest()->where('blog_category_id', 4)->take(3)->get(),
        ]);
    }

    public function searchBlog (Request $request)
    {
        $this->blogs = Blog::where('blog_category_id', 2)->where('blog_title','LIKE','%'.$request->search_text.'%')->paginate(10);
        return view('front.blog.blog',[
            'blogs'     => $this->blogs,
            'popularBlogs'  => Blog::orderBy('hit_count', 'DESC')->where('blog_category_id', 2)->take(3)->get(),
            'latestBlogs'  => Blog::latest()->where('blog_category_id', 2)->take(3)->get(),
        ]);
    }

    public function communitysearchBlog (Request $request)
    {
        $this->blogs = Blog::where('blog_category_id', 1)->where('blog_title','LIKE','%'.$request->search_text.'%')->paginate(10);
        return view('front.blog.community-blog',[
            'blogs'     => $this->blogs,
            'popularBlogs'  => Blog::orderBy('hit_count', 'DESC')->where('blog_category_id', 1)->take(3)->get(),
            'latestBlogs'  => Blog::latest()->where('blog_category_id', 1)->take(3)->get(),
        ]);
    }

    public function rentersearchBlog (Request $request)
    {
        $this->blogs = Blog::where('blog_category_id', 3)->where('blog_title','LIKE','%'.$request->search_text.'%')->paginate(10);
        return view('front.blog.renter-blog',[
            'blogs'     => $this->blogs,
            'popularBlogs'  => Blog::orderBy('hit_count', 'DESC')->where('blog_category_id', 3)->take(3)->get(),
            'latestBlogs'  => Blog::latest()->where('blog_category_id', 3)->take(3)->get(),
        ]);
    }

    public function buyersearchBlog (Request $request)
    {
        $this->blogs = Blog::where('blog_category_id', 4)->where('blog_title','LIKE','%'.$request->search_text.'%')->paginate(10);
        return view('front.blog.buyer-blog',[
            'blogs'     => $this->blogs,
            'popularBlogs'  => Blog::orderBy('hit_count', 'DESC')->where('blog_category_id', 4)->take(3)->get(),
            'latestBlogs'  => Blog::latest()->where('blog_category_id', 4)->take(3)->get(),
        ]);
    }

    public function shortProperties (Request $request)
    {
        $allProperties = Property::where('property_ads_type_id', 1)->where('status',1)->with('subImages')->get();
        $propertyTypeIdArray = [];
        foreach ($allProperties as $property)
        {
//            $propertyTypeIdArray[] = $property->property_type_id;
            array_push($propertyTypeIdArray,$property->property_type_id);
        }
        $propertyTypeIds = array_filter($propertyTypeIdArray);
        foreach ($propertyTypeIds as $propertyTypeId)
        {

            $propertyTypes[] = PropertyType::where('id', $propertyTypeId)->with('singleProperty')->first();
        }

        if ($request->from_page == 'buy')
        {
            if ($request->sort_by == 'featured')
            {
                $this->properties = Property::where('property_ads_type_id', 1)->where('property_promotion_type_id', 2)->where('status', 1)->with('subImages')->paginate(10);
            } elseif ($request->sort_by == 'new')
            {
                $this->properties = Property::where('property_ads_type_id', 1)->where('status', 1)->latest()->with('subImages')->paginate(10);
            } elseif ($request->sort_by == 'low')
            {
                $this->properties = Property::where('property_ads_type_id', 1)->orderBy('property_price', 'ASC')->where('status', 1)->with('subImages')->paginate(10);
            } elseif ($request->sort_by == 'high')
            {
                $this->properties = Property::where('property_ads_type_id', 1)->orderBy('property_price', 'DESC')->where('status', 1)->with('subImages')->paginate(10);
            }
            return view('front.buy.buy',[
                'properties'        => $this->properties,
                'propertyTypes'    => $propertyTypes,
            ]);
        } elseif ($request->form_page == 'rent')
        {
            if ($request->sort_by == 'featured')
            {
                $this->properties = Property::where('property_ads_type_id', 2)->where('property_promotion_type_id', 2)->where('status', 1)->with('subImages')->paginate(10);
            } elseif ($request->sort_by == 'new')
            {
                $this->properties = Property::where('property_ads_type_id', 2)->where('status', 1)->latest()->with('subImages')->paginate(10);
            } elseif ($request->sort_by == 'low')
            {
                $this->properties = Property::where('property_ads_type_id', 2)->orderBy('property_price', 'ASC')->where('status', 1)->with('subImages')->paginate(10);
            } elseif ($request->sort_by == 'high')
            {
                $this->properties = Property::where('property_ads_type_id', 2)->orderBy('property_price', 'DESC')->where('status', 1)->with('subImages')->paginate(10);
            }
            return view('front.rent.rent',[
                'properties'        => $this->properties,
                'propertyTypes'    => $propertyTypes,
            ]);
        } elseif ($request->form_page == 'commercial')
        {
            if ($request->sort_by == 'featured')
            {
                $this->properties = Property::where('property_ads_type_id', 3)->where('property_promotion_type_id', 2)->where('status', 1)->with('subImages')->paginate(10);
            } elseif ($request->sort_by == 'new')
            {
                $this->properties = Property::where('property_ads_type_id', 3)->where('status', 1)->latest()->with('subImages')->paginate(10);
            } elseif ($request->sort_by == 'low')
            {
                $this->properties = Property::where('property_ads_type_id', 3)->orderBy('property_price', 'ASC')->where('status', 1)->with('subImages')->paginate(10);
            } elseif ($request->sort_by == 'high')
            {
                $this->properties = Property::where('property_ads_type_id', 3)->orderBy('property_price', 'DESC')->where('status', 1)->with('subImages')->paginate(10);
            }
            return view('front.commercial.commercial',[
                'properties'        => $this->properties,
                'propertyTypes'    => $propertyTypes,
            ]);
        } elseif ($request->form_page == 'search')
        {
            if ($request->sort_by == 'featured')
            {
                $this->properties = Property::where('property_promotion_type_id', 2)->where('status', 1)->with('subImages')->paginate(10);
            } elseif ($request->sort_by == 'new')
            {
                $this->properties = Property::where('status', 1)->latest()->with('subImages')->paginate(10);
            } elseif ($request->sort_by == 'low')
            {
                $this->properties = Property::orderBy('property_price', 'ASC')->where('status', 1)->with('subImages')->paginate(10);
            } elseif ($request->sort_by == 'high')
            {
                $this->properties = Property::orderBy('property_price', 'DESC')->where('status', 1)->with('subImages')->paginate(10);
            }
            return view('front.commercial.commercial',[
                'properties'        => $this->properties,
                'propertyTypes'    => $propertyTypes,
            ]);
        }
    }
}
