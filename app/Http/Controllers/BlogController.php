<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.blogs.index')->with('blogs',Blog::orderBy('id','desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required',
            'title'=>'required',
            'description'=>'required'
        ]);
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->image = $request->image->store('blogs');
        $blog->thumb = $request->thumb->store('thumb_blogs');
        $blog->description = $request->description;
        $blog->save();
        return redirect()->route('blogs.index')->with(['success'=>'تم الاضافة بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('dashboard.blogs.edit')->with('blog',$blog);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        dd($request->all);
        $request->validate([
            'title'=>'required',
            'description'=>'required'
        ]);
        
        $blog->title = $request->title;
        if($request->image != null){
            $blog->image = $request->image->store('blogs');

        }
        if($request->thumb != null){
            $blog->thumb = $request->thumb->store('thumb_blogs');

        }

        $blog->description = $request->description;
        $blog->save();
        return redirect()->back()->with(['success'=>'تم التعديل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->back()->with(['success'=>'تم الحذف بنجاح']);

    }
}
