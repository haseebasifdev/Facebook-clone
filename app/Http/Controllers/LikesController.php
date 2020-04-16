<?php

namespace App\Http\Controllers;

use App\Post;
use App\Likes;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function store(Post $post)
    {
        if ($post->likes()->where('user_id', auth()->id())->exists()) {
            $post->likes()->where('user_id', auth()->id())->delete();
        } else {

            Likes::create([
                'post_id' => $post->id,
                'user_id' => auth()->id()
            ]);
        }
        return back();
    }
}
