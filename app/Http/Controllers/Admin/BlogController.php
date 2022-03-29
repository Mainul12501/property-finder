<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blog;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blogs.manage',[
            'blogs'    => Blog::orderBy('id', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create',[
            'blogCategories' => BlogCategory::where('status', 1)->get(),
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
        Blog::saveData($request);
        return redirect()->back()->with('message', 'Blog created successfully.');
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
        $this->blog = Blog::findOrFail($id);
        return view('admin.blogs.create',['blog' => $this->blog, 'blogCategories' => BlogCategory::where('status', 1)->get(),]);
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
        Blog::updateData($request, $id);
        return redirect()->route('admin.blogs.index')->with('message', 'Blog updated successfully.');
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
        $del = Blog::findOrFail($id);
        if (file_exists($del->main_image))
        {
            unlink($del->main_image);
        }
        $del->delete();
        return redirect()->back()->with('message','Blog deleted successfully.');
    }

    public function status ($id)
    {
        $status = Blog::findOrFail($id);
        $status->status = $status->status == 1 ? 0 : 1;
        $status->save();
        return redirect()->back()->with('message', 'Blog status updated successfully.');
    }
}
