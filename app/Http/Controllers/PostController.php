<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.list', compact('posts'));
    }

    public function view($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.view', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->user_id = Auth::id();
        $post->user = Auth::user()->getName();
        $post->title = $request->title;
        $post->content = $request->input('content');
        $post->save();
        return redirect()->route('posts.list');
    }
}
