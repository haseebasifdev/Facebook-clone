<?php

namespace App\Http\Controllers;

use App\Post;
use App\Likes;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function store(Post $post)
    {
        Likes::create([
            'post_id' => $post->id,
        ]);
        return back();
    }
}
