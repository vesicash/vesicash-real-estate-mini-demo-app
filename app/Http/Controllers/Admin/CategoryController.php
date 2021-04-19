<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;


class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::latest()->get();

        return view('admin.categories.index', compact('categories'));
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|unique:categories|max:255',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);

        $image = $request->file('image');
        $slug  = ($request->name);

        if(isset($image)){
            $imagename = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();
        }else{
            $imagename = 'default.png';
        }

        $category = new Category();
        $category->name = $request->name;
        $category->slug = $slug;
        $category->image = $imagename;
        $category->save();


        return redirect()->route('admin.categories.index')->with('message', 'Category created successfully.');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.categories.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required|max:255',
            'image' => 'mimes:jpeg,jpg,png'
        ]);

        $image = $request->file('image');
        $slug  = ($request->name);
        $category = Category::find($id);

        if(isset($image)){
            $imagename = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();
        }else{
            $imagename = $category->image;
        }

        $category->name = $request->name;
        $category->slug = $slug;
        $category->image = $imagename;
        $category->save();


        return redirect()->route('admin.categories.index')->with('message', 'Category updated successfully.');
    }


    public function destroy($id)
    {
        $category = Category::find($id);



        $category->delete();
        $category->posts()->detach();


        return back()->with('message', 'Category deleted successfully.');
    }
}
