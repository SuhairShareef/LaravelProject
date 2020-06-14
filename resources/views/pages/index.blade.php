@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <div class="container">
        <h1 class="display-3">Welcome To My Website</h1>
        <p>This the Home page<p>
        <p>
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">register</a>
        </p>
    </div>
</div>
@endsection
