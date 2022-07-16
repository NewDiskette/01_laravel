<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string'
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string'
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function delete()
    {
        $post = Post::find(2);

        $post->delete();

        dump('deleted');
    }

    public function restore()
    {
        $post = Post::withTrashed()->find(2);

        $post->restore();

        dump('restored');
    }

    public function firstOrCreate()
    {
        $post = Post::firstOrCreate(
            [
                'title' => 'some title of post from vsCode',
            ],
            [
                'title' => 'some title of post from vsCode',
                'content' => 'some interesting content',
                'image' => 'some_image.png',
                'likes' => 500,
                'is_published' => 1,
            ]
        );

        dump($post->content);
    }

    public function updateOrCreate()
    {
        $post = Post::updateOrCreate(
            [
                'title' => 'some title of post from vsCode',
            ],
            [
                'title' => 'some title of post from vsCode',
                'content' => 'interesting content',
                'image' => 'image.png',
                'likes' => 300,
                'is_published' => 1,
            ]
        );

        dump($post->content);
    }

    public function example()
    {
        $posts = Post::all();
        foreach($posts as $post)
            dump($post->title);

        $posts_published = Post::where('is_published', 1)->get();
        dump($posts_published);

        $one_post_published = Post::where('is_published', 1)->first();
        dump($one_post_published);
    }
}
