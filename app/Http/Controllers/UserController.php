<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users= User::all();
        return view('users.list',compact('users'));
    }
    public function authorpost($id)
    {
        $posts = DB::select('select * from posts where user_id = ?', [$id]);
        return view('posts.authorpost',compact('posts'));
    }
    public function mypost()
    {
        $posts = Auth::user()->posts;
        return view('posts.mypost',compact('posts'));
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit',compact('post'));
    }
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        return redirect()->route('users.mypost');
    }
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('users.mypost');
    }
}
