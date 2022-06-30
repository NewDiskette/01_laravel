<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::find(1);
        dump($post);
        dump($post->title);
        dump($post->content);
        dump($post->image);
        dump($post->likes);
        dump($post->is_published);
        dump($post->created_at);
        dd($post->updated_at);
    }
}
