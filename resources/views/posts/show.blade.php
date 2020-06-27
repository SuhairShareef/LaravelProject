@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <small>Created at {{$post->created_at}} by <strong>{{$post->user->name}}</strong></small>
    <hr>
    @if ($post->cover_image != 'noimage.jpg')
           <div class="text-center row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <img class="img-fluid rounded" style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
            </div>
        </div>
        <hr>
    @endif
 
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    @if ((!Auth::guest()) && (auth()->user()->id == $post->user_id))
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif
    <br><br>
    @endsection
    
    