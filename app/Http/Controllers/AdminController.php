<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function posts()
    {
        if (Auth::id() == 1) {
            $posts = Post::all();
            return view('admin.posts', compact('posts'));
        }
        return view('admin.errors');
    }

    public function users()
    {
        if (Auth::id() == 1) {
            $users = User::all();
            return view('admin.users', compact('users'));
        }
        return view('admin.errors');
    }
}
