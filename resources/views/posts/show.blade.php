@extends('layouts.app');

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
        <h1>{{$post->title}}</h1>
        <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}">
        <br><br>
<div>
    {!!$post->body!!}
</div>
<hr>
<small>Written on {{$post->created_at}}</small>
<hr>
@if(!Auth::guest()) {{--alow only user session to view the edit/delete button--}}
@if(Auth::user()->id == $post->user_id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
<td><a href = '/delete/{{ $post->id }}' class="btn btn-danger">Delete</a></td>
@endif
@endif
@endsection