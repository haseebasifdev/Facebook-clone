<?php

namespace App\Http\Controllers;

use App\Notification;
use App\Post;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = auth()->user()->notifications;
        return view('profiles.notification', compact('notifications'));
        // dd($notificatios);
    }
    public function show(Notification $note)
    {
        $note->open = true;
        $note->save();
        $post = Post::where('id', $note->post_id)->first();
        return view('posts.show', compact('post'));
    }
}
