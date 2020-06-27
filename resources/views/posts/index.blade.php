@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (!Auth::guest())
        <a class="btn btn-success btn-lg" href="/posts/create" role="button">Create Post</a>
    @endif
    <hr>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-3 col-sm-9">
                        <img class="img-thumbnail" style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-6 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Created at {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Posts Found</p>
    @endif
@endsection
