<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Property;
use App\Models\SEO;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    protected $seo;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.seo.manage',[
            'seos'    => SEO::orderBy('id', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.seo.create',[
            'properties'    => Property::orderBy('id', 'DESC')->get(),
            'blogs'    => Blog::orderBy('id', 'DESC')->get(),
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
        SEO::saveData($request);
        return redirect()->back()->with('message', 'property seo info successfully.');
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
        $this->seo = SEO::findOrFail($id);
        return view('admin.seo.create',['seo' => $this->seo, 'properties'    => Property::orderBy('id', 'DESC')->get(), 'blogs'    => Blog::orderBy('id', 'DESC')->get()]);
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
        SEO::updateData($request, $id);
        return redirect()->route('admin.seo.index')->with('message', 'property seo updated successfully.');
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
        $del = SEO::findOrFail($id);
        $del->delete();
        return redirect()->back()->with('message','property seo deleted successfully.');
    }

    public function status ($id)
    {
        $status = SEO::findOrFail($id);
        $status->status = $status->status == 1 ? 0 : 1;
        $status->save();
        return redirect()->back()->with('message', 'property seo status updated successfully.');
    }
}
