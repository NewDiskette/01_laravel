@extends('layouts.main')

@section('title')
    Posts
@endsection

@section('content')

    <h1>This is posts page</h1>

    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
        <div>{{ $post->content }}<div>
        <div>{{ $post->likes }}<div>
        <br>
    @endforeach

@endsection
