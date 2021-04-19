<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Feature;

class FeatureController extends Controller
{

    public function index()
    {
        $features = Feature::latest()->get();

        return view('admin.features.index',compact('features'));
    }


    public function create()
    {
        return view('admin.features.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:features|max:255'
        ]);

        $tag = new Feature();
        $tag->name = $request->name;
        $tag->slug = ($request->name);
        $tag->save();


        return redirect()->route('admin.features.index')->with('message', 'Feature created successfully.');
    }


    public function edit($id)
    {
        $feature = Feature::find($id);

        return view('admin.features.edit',compact('feature'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);

        $feature = Feature::find($id);
        $feature->name = $request->name;
        $feature->slug = ($request->name);
        $feature->save();


        return redirect()->route('admin.features.index')->with('message', 'Feature updated successfully.');
    }


    public function destroy($id)
    {
        $feature = Feature::find($id);
        $feature->delete();
        $feature->features()->detach();


        return back()->with('message', 'Feature deleted successfully.');
    }
}
