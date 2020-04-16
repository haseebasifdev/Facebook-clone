<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $guarded = [];
    public function commentUser()
    {
        return User::where('id', $this->user_id)->first();
    }
}
