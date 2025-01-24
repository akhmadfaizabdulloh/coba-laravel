<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // untuk menampilkan semua data post berdasarkan user tertentu

        // return 'ini halaman dashboard post';

        // return Post::where('user_id', auth()->user()->id)->get(); 
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // untuk menampilkan halaman tambah postingan

        // return view('dashboard.posts.create');

        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // untuk menjalankan fungsi tambah-nya

        // return $request;
        
        // ddd($request);
        
        // return $request->file('image_post')->store('post-image'); 
        //file (apapun) bernama 'image_post' akan di simpan di folder 'post-image'

        // script dibawahnya tidak akan di jalankan.

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image_post' => 'image|file|max:1024', //maximal 1 MB
            'body' => 'required'
        ]);

        if($request->file('image_post')) {
            $validatedData['image_post'] = $request->file('image_post')->store('post-images');
        }

        // kalau request dari file yang namanya 'image_post' itu ada isinya (true),
        // maka kita akan nambahin 1 buah $validatedData lagi (image), yang di isi dengan uplaoad gambarnya,
        // sekaligus ambil nama gambarnya. kemudian kita store()

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::create($validatedData);

        return redirect('dashboard/posts')->with('success', 'New Post has been added!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // fungsi lihat detail dari sebuah postingan
        // dan sudah otomatis ada route model binding-nya (Post $post)

        // return $post;

        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // halaman buat nampilin ubah data
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // halaman untuk proses ubah data-nya

        // return $request;

        $rules = [
            'title' => 'required|max:255',
            // 'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'body' => 'required'
        ];

        if($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::where('id', $post->id)
            ->update($validatedData);

        return redirect('dashboard/posts')->with('success', 'New Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // untuk delete postingannya

        Post::destroy($post->id);
        return redirect('dashboard/posts')->with('success', 'Post has been deleted!');
        
    }



    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }


}
