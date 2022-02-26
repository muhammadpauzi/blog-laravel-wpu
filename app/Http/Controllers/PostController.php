<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(["user", "category"])->latest()->get();
        return view('posts.posts', [
            "posts" => $posts
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.post', [
            "post"  => $post
        ]);
    }
}
