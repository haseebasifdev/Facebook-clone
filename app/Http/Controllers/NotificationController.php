<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = auth()->user()->notifications;
        return view('profiles.notification', compact('notifications'));
        // dd($notificatios);
    }
}
