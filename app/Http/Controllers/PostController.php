<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search')); //testing nangkep input search

        // $posts = Post::latest();

        // if (request('search')) {
        //     $posts->where('title', 'like', '%' . request('search') . '%')
        //           ->orWhere('body', 'like', '%' . request('search') . '%');
        // }

        return view('posts', [
            "title" => "All Posts",
            "active" => 'posts',
            // "posts" => Post::all()
            // "posts" => Post::latest()->get()
            // "posts" => $posts->get()
            "posts" => Post::latest()->filter()->get()

        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]); 
    }

    // public function show($slug)
    // {
    //     return view('post', [
    //         "title" => "Single Post",
    //         "post" => Post::find($slug)
    //     ]); 
    // }
}
