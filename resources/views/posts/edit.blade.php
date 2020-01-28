@extends('layouts.app');

@section('content')

        <h1>Edit Post</h1>
        <form method="POST" action="/edit/<?php echo $post->id; ?>" enctype="multipart/form-data">
            @csrf
        <div class="form-group">
            <label for="title">Title</label>
        <input type="title" class="form-control" name="title" value="<?php echo $post->title; ?>" placeholder="Title">
            {{-- <span class="text-danger">{{$errors->first('title')}}</span> --}}
          </div>
          <div class="form-group">
            <label for="title">Body</label>
          <textarea type="message" class="form-control" id="article-ckeditor"  name="body" placeholder="Body Text"><?php echo $post->body; ?></textarea>
            {{-- <span class="text-danger">{{$errors->first('body')}}</span> --}}
          </div>
          <div class="form-group">
            <input type="file" name="cover_image" id="cover_image">
            </div>
          <button type="submit" class="btn btn-primary">Edit</button>
        </form>
@endsection