<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $id = auth()->user()->id;
        // dd($id);
        // $users = User::all();
        $users = auth()->user()->friends()->pluck('id');
        $users->push(auth()->user()->id);
        // dd($users);
        $posts = Post::whereIn('user_id', $users)->latest()->get();
        // dd($posts);
        return view('posts.index', [
            'posts' => $posts,
        ]);
    }
    public function store()
    {
        // dd(request('user_id'));
        request()->validate([
            'body' => 'required| max:255',


        ]);
        // dd(auth()->id());
        Post::create([
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);
        return redirect('/posts');
    }
}
