@extends('layouts.app');

@section('content')

        <h1>Create Post</h1>
        <form method="POST" action="/submit" enctype="multipart/form-data">
            @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="title" class="form-control" name="title" placeholder="Title">
            {{-- <span class="text-danger">{{$errors->first('title')}}</span> --}}
          </div>
          <div class="form-group">
            <label for="title">Body</label>
            <textarea type="message" class="form-control" id="article-ckeditor" name="body" placeholder="Body Text"></textarea>
            {{-- <span class="text-danger">{{$errors->first('body')}}</span> --}}
          </div>
          <div class="form-group">
          <input type="file" name="cover_image" id="cover_image">
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
        </form>
@endsection