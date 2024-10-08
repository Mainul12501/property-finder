<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Company;
use App\Models\Property;
use App\Models\PropertyAdsType;
use App\Models\PropertyPromotionType;
use App\Models\PropertySubImage;
use App\Models\PropertyType;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Stripe;

class PropertyController extends Controller
{
    protected $property;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->id() == 1)
        {
            $properties = Property::all();
        } else {
            $properties = Property::where('agent_id', auth()->id())->get();
        }
        return view('admin.properties.manage',[
            'properties'    => $properties,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.properties.create',[
            'companies' => Company::where('status', 1)->get(),
            'agents' => Agent::where('status', 1)->get(),
            'propertyTypes' => PropertyType::where('status', 1)->get(),
            'propertyPromotionTypes' => PropertyPromotionType::where('status', 1)->get(),
            'propertyAdsTypes' => PropertyAdsType::where('status', 1)->get(),
            'siteSetting'  => SiteSetting::first(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->payment_method_type == 'stripe')
        {
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

            $payment = Stripe\Charge::create ([

                "amount" => SiteSetting::first()->payment_amount,

                "currency" => "usd",

                "source" => $request->stripeToken,
                'receipt_email' => auth()->user()->email,

            ]);
            if ($payment->status == "succeeded")
            {
                Property::saveData($request);
                return redirect()->back()->with('message', 'property created successfully.');
            } else {
                return redirect()->back()->with('message', 'something wrong with your payment.');
            }
        } elseif ($request->payment_method_type == 'free')
        {
            Property::saveData($request);
            return redirect()->back()->with('message', 'property created successfully.');
        } else {
            Property::saveData($request);
            return redirect()->back()->with('message', 'property created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->property = Property::findOrFail($id);
        return view('admin.properties.edit',[
            'property' => $this->property,
            'companies' => Company::where('status', 1)->get(),
            'agents' => Agent::where('status', 1)->get(),
            'propertyTypes' => PropertyType::where('status', 1)->get(),
            'propertyPromotionTypes' => PropertyPromotionType::where('status', 1)->get(),
            'propertyAdsTypes' => PropertyAdsType::where('status', 1)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Property::updateData($request, $id);
        return redirect()->route('admin.properties.index')->with('message', 'property-ads-types updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function del ($id)
    {
        $del = Property::findOrFail($id);
        if (file_exists($del->main_image))
        {
            unlink($del->main_image);
        }
        $subImages = PropertySubImage::where('property_id', $id)->get();
        foreach ($subImages as $subImage) {
            if (file_exists($subImage->big_img_url))
            {
                unlink($subImage->big_img_url);
            }
            if (file_exists($subImage->small_img_url))
            {
                unlink($subImage->small_img_url);
            }
            $subImage->delete();
        }
        $del->delete();
        return redirect()->back()->with('message','property-ads-types deleted successfully.');
    }

    public function status ($id)
    {
        $status = Property::findOrFail($id);
        $status->status = $status->status == 1 ? 0 : 1;
        $status->save();
        return redirect()->back()->with('message', 'property-ads-types status updated successfully.');
    }
}
