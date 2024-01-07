<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogRequest;

class BlogController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogItmes = Blog::all();
        return view('admin.blog.index',compact('blogItmes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        $inputs = $request->all();

        //customize
        $inputs['published_at'] = convertToGregorianDate($request->published_at);
        //test
        $inputs['tag'] = '1,2,3';
        $inputs['category_id'] = '1sd4454545sddfdfdf';

        $blog = Blog::create($inputs);

        //image upload
        $media = $this->verifyAndUpload($request,'image','blog');
        $blog->attachMedia($media,['blog']);

        return redirect()->route('admin.blog.index.index')->with('swal-success','بلاگ شما با موفقیت ثبت شد');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        $inputs = $request->all();

        //customize
        $inputs['published_at'] = convertToGregorianDate($request->published_at);
        //test
        $inputs['tag'] = '1,2,3';
        $inputs['category_id'] = '1sd4454545sddfdfdf';

        $blog->update($inputs);

        if ($request->hasFile('image')) {
            $media = $this->verifyAndUpload($request,'image','blog');
            $blog->syncMedia($media,['blog']);
        }

        return redirect()->route('admin.blog.index.index')->with('swal-success','بلاگ شما با موفقیت ویرایش  شد');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blog.index.index')->with('swal-success','بلاگ شما با موفقیت حذف شد');
    }
}
