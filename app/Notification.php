<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function notifyUser()
    {
        // $user = User::where('id', $this->from_User_id)->latest();
        return (User::where('id', $this->from_User_id)->first());
        // dd($user->name);
    }
}
