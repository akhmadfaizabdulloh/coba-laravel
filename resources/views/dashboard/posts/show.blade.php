@extends('dashboard.layouts.main')

@section('container')

    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">

                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                {{-- <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a> --}}

                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf

                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        <span data-feather="x-circle"></span> Delete
                    </button>

                </form>

                <img src="/img/{{ $post->category->slug }}.jpg" width="1200" height="400" style="object-fit: cover; object-position: center;" class="img-fluid mt-3" alt="{{ $post->category->name }}">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                {{-- <a href="/posts" class="d-block mt-3">Back To Posts </a> --}}
                
            </div>
        </div>
    </div>

@endsection