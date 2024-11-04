<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


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

        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => 'posts',
            // "posts" => Post::all()
            // "posts" => Post::latest()->get()
            // "posts" => $posts->get()
            // "posts" => Post::latest()->filter()->get()
            // "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->get()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
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
