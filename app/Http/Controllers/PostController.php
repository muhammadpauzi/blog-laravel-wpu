<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()->latest()->get();
        return view('posts', [
            "posts" => $posts
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "post"  => $post
        ]);
    }
}
