<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AddFriendsControler extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('profiles.add-friends', compact('users'));
    }
    public function store(User $user)
    {
        if (auth()->user()->hasFriends($user)) {
            auth()->user()->unfriend($user);
        } else {
            auth()->user()->addfriend($user);
        }
        return back();
    }
    public function create()
    {
        $users = auth()->user()->pandingRequests();
        // dd($users);
        return view('profiles.pendingRequest', compact('users'));
    }
    public function update(User $user)
    {

        auth()->user()->approveRequests($user);
        // $users = auth()->user()->pandingRequests();
        // dd($users);
        return back();
    }
    public function delete(User $user)
    {
        // dd($user->id);
        auth()->user()->unfriend($user);
        // $users = auth()->user()->pandingRequests();
        // dd($users);
        return back();
    }
}
