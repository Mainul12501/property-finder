<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Company;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    protected $properties;
    public function homeSearch (Request $request)
    {
//return $request;
        $searchExistSearch = search::where('search_text', $request->search_text)->get();
        if (count($searchExistSearch)>0)
        {
            foreach ($searchExistSearch as $existSearch)
            {
                $existSearch->hit_count = $existSearch->hit_count +1;
                $existSearch->save();
            }
        }
        search::saveSearch($request);

        $this->properties = $this->getPropertyInfosForSearch($request);
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

        return view('front.search.search',[
            'properties'    => $this->properties,
            'propertyTypes'    => isset($propertyTypes) ? $propertyTypes :'',
        ]);

    }

    public function getPropertyInfosForSearch($request)
    {
//                return $request;
//        return Property::where('status', 1)->where('property_type_id',1)->where('property_ads_type_id',1)->get();
        $propertyQuiry = Property::query();
        $propertyQuiry->where('status', 1);
        if (isset($request->search_text))
        {
            $propertyQuiry->where('property_title','LIKE','%'.$request->search_text.'%');
        }
        if (isset($request->property_id))
        {
            $propertyQuiry->where('id',$request->property_id);
        }
//        if (isset($request->property_ads_type_id))
//        {
//            return 'property_ads_type_id';
//            $propertyQuiry->where('property_ads_type_id',$request->property_ads_type_id);
//        }
        if (isset($request->property_type_id))
        {
            $propertyQuiry->where('property_type_id',$request->property_type_id);
        }
        if (isset($request->bedrooms))
        {
            $propertyQuiry->where('bedrooms',$request->bedrooms);
        }
        if (isset($request->bathrooms))
        {
            $propertyQuiry->where('bathrooms',$request->bathrooms);
        }
        if (isset($request->min_price) && isset($request->max_price))
        {
            $propertyQuiry->whereBetween('property_price',[$request->min_price, $request->max_price]);
        } elseif (isset($request->min_price))
        {
            $propertyQuiry->where('property_price', '>', $request->min_price);
        } elseif (isset($request->max_price))
        {
            $propertyQuiry->where('property_price', '<', $request->min_price);
        }
        if (isset($request->req_type) && $request->req_type == 'buy')
        {
            $propertyQuiry->where('property_ads_type_id', 1);
        } elseif (isset($request->req_type) && $request->req_type == 'rent')
        {
            $propertyQuiry->where('property_ads_type_id', 2)->orWhere('property_ads_type_id',3);
        }
        if (isset($request->property_size))
        {
            $propertyQuiry->whereBetween('property_size', [$request->min_size, $request->max_size]);
        }
        if (isset($request->is_furnished))
        {
            $propertyQuiry->where('is_furnished', 1);
        }
        if (isset($request->is_completed))
        {
            $propertyQuiry->where('property_completion', 1);
        }
        $this->properties = $propertyQuiry->paginate(10);
        return $this->properties;
    }

    public function agentSearch (Request $request)
    {

        if ($request->search_type == 'agent')
        {
            $agentsQuery    = Agent::query();
            $agentsQuery->where('name','LIKE', '%'.$request->search_text.'%')->where('status', 1);
            if (isset($request->language))
            {
                $agentsQuery->where('languages', 'LIKE', '%'.$request->language.'%');
            }
            if (isset($request->nationality))
            {
                $agentsQuery->where('nationality', $request->nationality);
            }
            $agents = $agentsQuery->with('company')->paginate(12);
            return view('front.findCompanyAgents.agent-search',[
                'agents'    => $agents,
            ]);
        } elseif ($request->search_type == 'company')
        {
            $companies  = Company::where('name','LIKE', '%'.$request->search_text.'%')->where('status', 1)->with('agents')->paginate(12);

            return view('front.findCompanyAgents.company-search',[
                'companies' => $companies,
            ]);
        }
    }

    public function projectSearch (Request $request)
    {
        $propertyQuery = Property::query();
        $propertyQuery->where('status', 1);
        if (isset($request->search_text))
        {
            $propertyQuery->where('property_title','LIKE','%'.$request->search_text.'%');
        }
        if (isset($request->property_type_id))
        {
            $propertyQuery->where('property_type_id', $request->property_type_id);
        }

        if (isset($request->is_completed))
        {
            $propertyQuery->where('is_completed', $request->is_completed);
        }

        $this->properties = $propertyQuery->paginate(10);
        return view('front.newProject.newProject',[
            'properties'    => $this->properties,
            'totalProperties'    => count(Property::orderBy('id','DESC')->get()),
        ]);

    }
}
