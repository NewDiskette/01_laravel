<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        $postsArr = [
            [
                'title' => 'title of post from vsCode',
                'content' => 'some interesting content',
                'image' => 'image.png',
                'likes' => 20,
                'is_published' => 1,
            ],
            [
                'title' => 'another title of post from vsCode',
                'content' => 'another some interesting content',
                'image' => 'another_image.png',
                'likes' => 50,
                'is_published' => 1,
            ],
        ];

        foreach($postsArr as $item)
            Post::create($item);

        dd('created');
    }

    public function update()
    {
        $post = Post::find(8);

        $post->update(
            [
                'title' => 'updated title of post from vsCode',
                'content' => 'updated some interesting content',
                'image' => 'updated_image.png',
                'likes' => 30,
            ],
        );

        dump('updated');
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
