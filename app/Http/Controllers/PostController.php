<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.list', compact('posts', 'comments'));
    }

    public function view($id)
    {
        $post = Post::findOrFail($id);
        $comments = Comment::where('post_id', $post->id)->get();
        return view('posts.view', compact('post', 'comments'));
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
        $post->image = $request->input('image');
        $post->content = $request->input('content');
        $post->save();
        return redirect()->route('posts.list');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('search');
        if (!$keyword) {
            return redirect()->route('posts.list');
        }
        $posts = Post::where('title', 'LIKE', '%' . $keyword . '%')->get();
        return view('posts.search', compact('posts', 'keyword'));
    }

    public function comment(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user = Auth::user()->getName();
        $comment->post_id = $post->id;
        $comment->user_id = Auth::id();
        $comment->save();
        return redirect()->route('posts.view', $id);
    }
}
