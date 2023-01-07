@extends('layouts.app')
@section('content')
<h1>Posts</h1>
@if(count($posts) > 0)
    @foreach ($posts as $post)
        <div class="mt-4 p-5 bg-secondary text-white rounded">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}}</small>
        </div>
    @endforeach
    <hr>
    {{$posts->links()}}
@else
    <p>No posts found</p>
@endif
@endsection