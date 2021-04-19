<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::latest()->get();

        return view('admin.tags.index', compact('tags'));
    }


    public function create()
    {
        return view('admin.tags.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tags|max:255'
        ]);

        $tag = new Tag();
        $tag->name = $request->name;
        $tag->slug = ($request->name);
        $tag->save();


        return redirect()->route('admin.tags.index')->with('message', 'Tag created successfully.');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $tag = Tag::find($id);

        return view('admin.tags.edit',compact('tag'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);

        $tag = Tag::find($id);
        $tag->name = $request->name;
        $tag->slug = ($request->name);
        $tag->save();


        return redirect()->route('admin.tags.index')->with('message', 'Tag updated successfully.');
    }


    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        $tag->posts()->detach();


        return back()->with('message', 'Tag deleted successfully.');
    }
}
