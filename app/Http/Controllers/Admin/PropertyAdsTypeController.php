<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PropertyAdsType;
use Illuminate\Http\Request;

class PropertyAdsTypeController extends Controller
{
    protected $propertyAdsType;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.property-ads-types.manage',[
            'propertyAdsTypes'    => PropertyAdsType::orderBy('id', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.property-ads-types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PropertyAdsType::saveData($request);
        return redirect()->back()->with('message', 'property-ads-types created successfully.');
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
        $this->propertyAdsType = PropertyAdsType::findOrFail($id);
        return view('admin.property-ads-types.create',['propertyAdsType' => $this->propertyAdsType]);
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
        PropertyAdsType::updateData($request, $id);
        return redirect()->route('admin.property-ads-types.index')->with('message', 'property-ads-types updated successfully.');
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
        $del = PropertyAdsType::findOrFail($id);
        $del->delete();
        return redirect()->back()->with('message','property-ads-types deleted successfully.');
    }

    public function status ($id)
    {
        $status = PropertyAdsType::findOrFail($id);
        $status->status = $status->status == 1 ? 0 : 1;
        $status->save();
        return redirect()->back()->with('message', 'property-ads-types status updated successfully.');
    }
}
