<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {

        $propertycount = Property::count();
        $postcount     = Post::count();
        $usercount     = User::count();

        $properties    = Property::latest()->with('user')->take(5)->get();
        $posts         = Post::latest()->get();
        $users         = User::with('role')->get();


        return view('admin.dashboard', compact(
            'propertycount', 'postcount', 'usercount',
            'properties',    'posts',     'users',
        ));
    }














}
