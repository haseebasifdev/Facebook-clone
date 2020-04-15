<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friendrequests extends Model
{
    //
    protected $guarded = [];

    
    public function getRouteKeyName()
    {
        return 'reciever_user_id';
    }
}
