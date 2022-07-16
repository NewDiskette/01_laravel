@extends('layouts.main')

@section('title')
    Posts
@endsection

@section('content')

<div>
    <div>{{ $post->id }}. {{ $post->title }}</div>
    <div>{{ $post->content }}</div>
    <div>
        <a class="btn btn-primary mb-1" href="{{ route('post.edit', $post->id)}}">Edit</a>
    </div>
    <div>
        <form action="{{ route('post.delete', $post->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger mb-3">
        </form>
    </div>
    <div>
        <a class="text-decoration-none" href="{{ route('post.index') }}">Back</a>
    </div>
</div>

@endsection
