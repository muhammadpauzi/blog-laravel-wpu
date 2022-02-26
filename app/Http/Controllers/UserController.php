<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function postsByUser(User $user)
    {
        return view('users.posts_by_user', [
            "posts" => $user->posts,
            "user"  => $user
        ]);
    }
}
