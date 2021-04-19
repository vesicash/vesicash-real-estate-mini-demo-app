<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Feature;


class PropertyController extends Controller
{

    public function index()
    {
        $properties = Property::latest()->get();

        return view('admin.properties.index',compact('properties'));
    }


    public function create()
    {
        $features = Feature::all();

        return view('admin.properties.create',compact('features'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required|unique:properties|max:255',
            'price'     => 'required',
            'purpose'   => 'required',
            'type'      => 'required',
            'bedroom'   => 'required',
            'bathroom'  => 'required',
            'city'      => 'required',
            'address'   => 'required',
            'area'      => 'required',
            'image'     => 'required|image|mimes:jpeg,jpg,png',
            'description'        => 'required',
            'location_latitude'  => 'required',
            'location_longitude' => 'required',
        ]);

        $image = $request->file('image');
        $slug  = ($request->title);

        if(isset($image)){
            $response = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();

        }

        $property = new Property();
        $property->title    = $request->title;
        $property->slug     = $slug;
        $property->price    = $request->price;
        $property->purpose  = $request->purpose;
        $property->type     = $request->type;
        $property->image    = $response;
        $property->bedroom  = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->city     = $request->city;
        $property->city_slug= ($request->city);
        $property->address  = $request->address;
        $property->area     = $request->area;

        if(isset($request->featured)){
            $property->featured = true;
        }
        $property->agent_id = 1;
        $property->description          = $request->description;
        $property->video                = $request->video;
        $property->location_latitude    = $request->location_latitude;
        $property->location_longitude   = $request->location_longitude;
        $property->nearby               = $request->nearby;
        $property->save();

        $property->features()->attach($request->features);

        return redirect()->route('admin.properties.index')->with('message', 'Property created successfully.');
    }


    public function show(Property $property)
    {
        $property = Property::find($property->id);


        return view('admin.properties.show',compact('property','videoembed'));
    }


    public function edit(Property $property)
    {
        $features = Feature::all();
        $property = Property::find($property->id);


        return view('admin.properties.edit',compact('property','features','videoembed'));
    }


    public function update(Request $request, $property)
    {
        $request->validate([
            'title'     => 'required|max:255',
            'price'     => 'required',
            'purpose'   => 'required',
            'type'      => 'required',
            'bedroom'   => 'required',
            'bathroom'  => 'required',
            'city'      => 'required',
            'address'   => 'required',
            'area'      => 'required',
            'image'     => 'image|mimes:jpeg,jpg,png',
            'floor_plan'=> 'image|mimes:jpeg,jpg,png',
            'description'        => 'required',
            'location_latitude'  => 'required',
            'location_longitude' => 'required'
        ]);

        $image = $request->file('image');
        $slug  = ($request->title);

        $property = Property::find($property->id);

        if(isset($image)){
            $imagename = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();

        }else{
            $imagename = $property->image;
        }



        $property->title        = $request->title;
        $property->slug         = $slug;
        $property->price        = $request->price;
        $property->purpose      = $request->purpose;
        $property->type         = $request->type;
        $property->image        = $imagename;
        $property->bedroom      = $request->bedroom;
        $property->bathroom     = $request->bathroom;
        $property->city         = $request->city;
        $property->city_slug    = ($request->city);
        $property->address      = $request->address;
        $property->area         = $request->area;

        if(isset($request->featured)){
            $property->featured = true;
        }else{
            $property->featured = false;
        }

        $property->description  = $request->description;
        $property->video        = $request->video;
        $property->location_latitude  = $request->location_latitude;
        $property->location_longitude = $request->location_longitude;
        $property->nearby             = $request->nearby;
        $property->save();

        $property->features()->sync($request->features);




        return redirect()->route('admin.properties.index')->with('message', 'Property updated successfully.');
    }


    public function destroy(Property $property)
    {
        $property = Property::find($property->id);



        $property->delete();


        $property->features()->detach();
        $property->comments()->delete();


        return back()->with('message', 'Property deleted successfully.');
    }





}
