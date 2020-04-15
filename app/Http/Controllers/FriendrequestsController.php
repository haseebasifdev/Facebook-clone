<?php

namespace App\Http\Controllers;

use App\Friendrequests;
use App\User;
use Illuminate\Http\Request;

class FriendrequestsController extends Controller
{
    public function index()
    {
        $user = auth()->user()->friendrequests()->pluck('sender_user_id');
        $users = User::find($user);
        return view('profiles.pendingRequest', [
            'users' => $users
        ]);
    }
    public function create(User $user)
    {
        Friendrequests::create([
            'sender_user_id' => auth()->id(),
            'reciever_user_Id' => $user->id,
        ]);
        return back();
    }
    public function destroy(User $user)
    {
        auth()->user()->deleteSendPendingFriendRequest($user);
        // dd('destroy');
        // dd(Friendrequests::where('reciever_user_id',$user->id)->where('sender_user_id',auth()->id())->exists());
        return back();
    }
}
