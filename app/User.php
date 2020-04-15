<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // public function getAvatarAttribute()
    // {
    //     return 'https://i.pravatar.cc/200?u=' . $this->email;
    // }

    public function getAvatarAttribute($value)
    {
        if ($value) {
            return (asset('storage/' . $value));
        } else {
            return (asset('/images/download.png'));
        }
        dd(asset('storage/' . $value ? 'storage/' . $value  : '/images/download.png'));
    }
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    public function posts()
    {
        return $this->hasMany(Post::class)->latest();
    }
    public function addfriend(User $user)
    {
        return $this->friends()->save($user);
    }
    public function unfriend(User $user)
    {
        return $this->friends()->detach($user);
    }
    public function friends()
    {
        return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_user_id');
        // dd($this->belongsToMany(User::class, 'friends', 'user_id', 'friend_user_id')->where('friend', true))
    }
    public function pandingRequests()
    {
        return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_user_id')->get();
    }
    public function approveRequests($user)
    {
        // dd($user-);
        return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_user_id')->where('friend_user_id', $user->id)->update(['friend' => true]);
    }
    public function hasFriends(User $user)
    {
        return $this->friends()->where('friend_user_id', $user->id)->exists();
    }
    public function hasvarifiedFriends(User $user)
    {
        return $this->friends()->where('friend_user_id', $user->id)->exists();
    }
    public function friendrequests()
    {
        return $this->hasMany('App\Friendrequests', 'reciever_user_id');
    }
    public function pendingfriendrequest(User $user)
    {
        return $this->hasMany(Friendrequests::class, 'reciever_user_id')->where('sender_user_id', $user->id)->exists();
    }
    public function sendpendingfriendrequest(User $user)
    {
        return $this->hasMany(Friendrequests::class, 'sender_user_id')->where('reciever_user_id', $user->id)->exists();
    }
    public function deleteSendPendingFriendRequest(User $user)
    {
        return $this->hasMany('App\Friendrequests', 'sender_user_id')->where('reciever_user_id', $user->id)->delete();;
    }
    public function deleteRecievePendingFriendRequest(User $user)
    {
        return $this->hasMany('App\Friendrequests', 'reciever_user_id')->where('sender_user_id', $user->id)->delete();;
    }
}
