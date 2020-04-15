<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        // dd($user->id);
        return view('profiles.show', compact('user'));
    }
    public function edit(User $user)
    {

        return view('profiles.edit', compact('user'));
    }
    public function update(User $user)
    {

        // dd(request('avatar'));
        // $user->update([
        //     'avatar' => request('avatar'),
        // ]);
        $attribute = request()->validate([
            'name' => 'required|min:2|string|max:255|',
            'email' => 'required|email|string|max:255',
            'password' => 'required|string|min:8|confirmed'
        ]);

        // // dd($attribute);
        // // if (request('password')) {
        // //     $attribute = request()->validate([
        // //         'name' => 'sometimes|min:8|string|max:255',
        // //     ]);
        // // }
        if (request('avatar')) {
            $attribute['avatar'] = request('avatar')->store('profiles');
        }
        // // ($user['avatar'];
        // // dd($attribute['avatar']);
        $user->update($attribute);

        return redirect('/profiles/' . $user->id);
        // return redirect('/profiles/' . $user->id);
    }
}
