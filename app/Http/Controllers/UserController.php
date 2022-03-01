<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function postsByUser(User $author)
    {
        return view('users.posts_by_user', [
            "posts" => $author->posts->load('author', 'category'),
            "user"  => $author
        ]);
    }
}
