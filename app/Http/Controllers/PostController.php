<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
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
