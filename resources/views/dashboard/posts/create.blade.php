@extends('dashboard.layouts.main')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">

    <form method="POST" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
      @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required autofocus>
          
          @error('title')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror

        </div>

        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" readonly required>

          @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror

        </div>

        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" name="category_id">

            @foreach ($categories as $category)

              @if ( old('category_id') == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
              @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endif

            @endforeach
            
          </select>
        </div>

        <div class="mb-3">
          <label for="image_post" class="form-label">Post Image</label>

          <img class="img-preview img-fluid mb-3 col-sm-5">

          <input class="form-control @error('image_post') is-invalid @enderror" type="file" id="image_post" name="image_post" onchange="previewImage()">

          @error('image_post')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror

        </div>
        
        <div class="mb-3">
          <label for="body" class="form-label">Body</label>

          @error('body')
              <p class="text-danger">{{ $message }}</p>
          @enderror

          <input id="body" type="hidden" name="body" value="{{ old('body') }}">
          <trix-editor input="body"></trix-editor>
        </div>

        {{-- <form …>
          <input id="x" type="hidden" name="content">
          <trix-editor input="x"></trix-editor>
        </form> --}}

        {{-- <script>alert('hahaha');</script> --}}

        <button type="submit" class="btn btn-primary">Create Post</button>
        
    </form>

</div>

<script>

  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function() {
    
    //callback
    fetch ('/dashboard/posts/checkSlug?title=' + title.value)
    
    .then (response => response.json()) //datanya masih promise, jadi kita then lagi

    .then (data => slug.value = data.slug)

  });

  document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
  });

  function previewImage() {
    const image = document.querySelector('#image_post');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
  }

</script>

@endsection