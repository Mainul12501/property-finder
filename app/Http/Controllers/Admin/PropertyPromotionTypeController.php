<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PropertyPromotionType;
use Illuminate\Http\Request;

class PropertyPromotionTypeController extends Controller
{
    protected $propertyPromotionType;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.property-promotion-types.manage',[
            'propertyPromotionTypes'    => PropertyPromotionType::orderBy('id', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.property-promotion-types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PropertyPromotionType::saveData($request);
        return redirect()->back()->with('message', 'property-promotion-types created successfully.');
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
        $this->propertyPromotionType = PropertyPromotionType::findOrFail($id);
        return view('admin.property-promotion-types.create',['propertyPromotionType' => $this->propertyPromotionType]);
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
        PropertyPromotionType::updateData($request, $id);
        return redirect()->route('admin.property-promotion-types.index')->with('message', 'property-promotion-types updated successfully.');
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
        $del = PropertyPromotionType::findOrFail($id);
        $del->delete();
        return redirect()->back()->with('message','property-promotion-types deleted successfully.');
    }

    public function status ($id)
    {
        $status = PropertyPromotionType::findOrFail($id);
        $status->status = $status->status == 1 ? 0 : 1;
        $status->save();
        return redirect()->back()->with('message', 'property-promotion-types status updated successfully.');
    }
}
