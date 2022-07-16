@extends('layouts.main')

@section('title')
    Posts
@endsection

@section('content')

<div>
    <div>
        <a class="btn btn-primary mb-3" href="{{ route('post.create')}}">Add one</a>
    </div>
    @foreach($posts as $post)
        <div>
            <a class="text-decoration-none" href="{{ route('post.show', $post->id) }}">
                {{ $post->id }}. {{ $post->title }}
            </a>
        </div>
    @endforeach
</div>

@endsection
