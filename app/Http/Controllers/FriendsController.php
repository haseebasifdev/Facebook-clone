<?php

namespace App\Http\Controllers;

use App\Friendrequests;
use App\Friends;
use App\User;
use Illuminate\Http\Request;

class FriendsController extends Controller
{
    public function store(User $user)
    {
        Friends::create([
            'user_id' => auth()->id(),
            'friend_user_id' => $user->id,
        ]);
        Friends::create([
            'user_id' => $user->id,
            'friend_user_id' => auth()->id(),
        ]);
        Friendrequests::where('reciever_user_id', auth()->id())->where('sender_user_id', $user->id)->delete();
        // $requests = Friendrequests::where('reciever_user_id',auth()->id())->exists();
        // $requests->delete();
        // dd($requests);
        return back();
    }
    public function destroy(User $user)
    {
        if (auth()->user()->hasFriends($user)) {
            // dd('Delete friend');
            auth()->user()->unfriend($user);
            $user->unfriend(auth()->user());
        } else {

            auth()->user()->deleteRecievePendingFriendRequest($user);
        } // dd('destroy');
        // dd(Friendrequests::where('reciever_user_id',$user->id)->where('sender_user_id',auth()->id())->exists());
        return back();
    }
}
