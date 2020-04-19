<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Post;
use App\Notification;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
        // dd($post);
        if (auth()->id() !== $post->user_id) {
            Notification::create([
                'post_id' => $post->id,
                'from_User_id' => auth()->id(),
                'to_User_id' => $post->user_id,
                'type' => 'Commented'
            ]);
        }
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
