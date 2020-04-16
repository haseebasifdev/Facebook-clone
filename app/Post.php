<?php

namespace App;

use App\User;
use App\Likes;
use App\Comments;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Scalar\MagicConst\Line;

class Post extends Model
{
    protected $fillable = ['body', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function likes()
    {
        return $this->hasMany(Likes::class);
    }
    public function liked()
    {
        return $this->hasMany(Likes::class)->where('user_id', auth()->id())->exists();
    }
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
    // public function like()
    // {
    //     return $this->hasMany(Likes::class);
    // }
}
