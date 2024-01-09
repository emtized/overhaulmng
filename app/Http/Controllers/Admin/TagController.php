<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TagRequest;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tags.index',compact('tags'));
    }

    public function create()
    {
        //
    }

    public function store(TagRequest $request)
    {
        $inputs = $request->all();

        Tag::create($inputs);
        return redirect()->back()->with('swal-success','تگ شما با موفقیت  ثبت شد');
    }

    public function edit(Tag $tag)
    {
        return view('admin.tags.edit',compact('tag'));
    }

    public function update(TagRequest $request,Tag $tag)
    {
        $inputs = $request->all();

        $tag->update($inputs);
        return redirect()->route('admin.tags.admin')->with('swal-success','تگ شما با موفقیت  ویرایش  شد');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->back()->with('swal-success','تگ شما با موفقیت  حذف  شد');
    }
}
