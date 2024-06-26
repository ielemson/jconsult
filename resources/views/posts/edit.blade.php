@extends('layouts.back')
@if (session()->has('updatePostSuccess'))
    @section('alerts')
        <div class="alert alert-success alert-dismissible fade show light-green" role="alert">
            {!! session('updatePostSuccess') !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endsection
@endif
@section('breadcrumb')
    <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Posts Edit</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>
                        </div>
                        <div class="card-body">
                           <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select id="category" name="category" class="form-control custom-select">
                                        <option disabled>Select one</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $post->categories->first() && $category->id == $post->categories->first()->id ? 'selected' : '' }}>
                                                {{ $category->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        value="{{ $post->title }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="resume">Post Excerpt</label>
                                    <textarea id="resume" name="excerpt" class="form-control" rows="3">{{ $post->excerpt }}</textarea>
                                </div>
                            </div>
                           <div class="col-md-12">
                            <div class="form-group">
                                <label for="body">Post Description</label>
                                <textarea id="summernote" name="body" class="form-control" rows="5">{{ $post->excerpt }}</textarea>
                            </div>
                           </div>
                            <div class="col-md-6">
                                <div class="image-preview">
                                    <img src="{{ asset('images/' . $post->image) }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">New Image</label>
                                    <input type="file" name="image" class="form-control-file" id="image">
                                </div>
                            </div>
                           </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
               
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Save Changes" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
@endsection


@section('javascript')
  <!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>  
<script>
    $('#summernote').summernote({
      placeholder: 'Hello your post description goes here..',
      tabsize: 2,
      height: 200
    });
  </script>
@endsection
