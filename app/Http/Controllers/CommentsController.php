<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
        // dd($post);
        Comments::create(
            [
                'post_id' => $post->id,
                'user_id' => auth()->id(),
                'body' => request('body')
            ]
        );
        return back();
    }
}
