<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    protected $blogCategory;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blog-categories.manage',[
            'blogCategories'    => BlogCategory::orderBy('id', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BlogCategory::saveData($request);
        return redirect()->back()->with('message', 'Blog category created successfully.');
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
        $this->blogCategory = BlogCategory::findOrFail($id);
        return view('admin.blog-categories.create',['blogCategory' => $this->blogCategory]);
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

        BlogCategory::updateData($request, $id);
        return redirect()->route('admin.blog-categories.index')->with('message', 'Blog category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function del ($id)
    {
        $del = BlogCategory::findOrFail($id);
        if (file_exists($del->image))
        {
            unlink($del->image);
        }
        $del->delete();
        return redirect()->back()->with('message','Blog Category deleted successfully.');
    }

    public function status ($id)
    {
        $status = BlogCategory::findOrFail($id);
        $status->status = $status->status == 1 ? 0 : 1;
        $status->save();
        return redirect()->back()->with('message', 'Blog category status updated successfully.');
    }
}
