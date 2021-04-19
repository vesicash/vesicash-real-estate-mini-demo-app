<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PostController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->get();

        return view('admin.posts.index',compact('posts'));
    }


    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create',compact('categories','tags'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required|unique:posts|max:255',
            'image'     => 'required|mimes:jpeg,jpg,png',
            'categories'=> 'required',
            'tags'      => 'required',
            'body'      => 'required'
        ]);

        $image = $request->file('image');
        $slug  = ($request->title);

        if(isset($image)){
            $imagename = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();

        }else{
            $imagename = 'default.png';
        }

        $post = new Post();
        $post->title = $request->title;
        $post->slug = $slug;
        $post->image = $imagename;
        $post->body = $request->body;
        if(isset($request->status)){
            $post->status = true;
        }
        $post->is_approved = true;
        $post->save();

        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);


        return redirect()->route('admin.posts.index')->with('message', 'Post created successfully.');

    }


    public function show(Post $post)
    {
        $post = Post::find($post->id);

        return view('admin.posts.show',compact('post'));
    }


    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $post = Post::find($post->id);

        $selectedtag = $post->tags->pluck('id');

        return view('admin.posts.edit',compact('categories','tags','post','selectedtag'));
    }


    public function update(Request $request, $post)
    {
        $request->validate([
            'title'     => 'required|max:255',
            'image'     => 'mimes:jpeg,jpg,png',
            'categories'=> 'required',
            'tags'      => 'required',
            'body'      => 'required'
        ]);

        $image = $request->file('image');
        $slug  = ($request->title);

        $post = Post::find($post->id);

        if(isset($image)){
            $imagename = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();

        }else{
            $imagename = $post->image;
        }

        $post->user_id = 1;
        $post->title = $request->title;
        $post->slug = $slug;
        $post->image = $imagename;
        $post->body = $request->body;
        if(isset($request->status)){
            $post->status = true;
        }else{
            $post->status = false;
        }
        $post->is_approved = true;
        $post->save();

        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);


        return redirect()->route('admin.posts.index')->with('message', 'Post updated successfully.');
    }


    public function destroy(Post $post)
    {
        $post = Post::find($post->id);

        $post->delete();
        $post->categories()->detach();
        $post->tags()->detach();
        $post->comments()->delete();


        return back()->with('message', 'Post deleted successfully.');
    }
}
