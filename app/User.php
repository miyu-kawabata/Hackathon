<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nickname', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


  public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    
    public function followings()
    {
        return $this->belongsToMany(User::class, 'user_follow', 'user_id', 'follow_id')->withTimestamps();
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'user_follow', 'follow_id', 'user_id')->withTimestamps();
    }
    
    public function follow($userId)
{
    // confirm if already following
    $exist = $this->is_following($userId);
    // confirming that it is not you
    $its_me = $this->id == $userId;

    if ($exist || $its_me) {
        // do nothing if already following
        return false;
    } else {
        // follow if not following
        $this->followings()->attach($userId);
}}
  
  public function groups()
    {
        return $this->belongsToMany(Group::class, 'members', 'group_id', 'user_id')->withTimestamps();
    }
    
    public function join($groupId)
{
    $exist = $this->is_joining($groupId);
   
    if ($exist) {
        return false;
    } else {
        $this->groups()->attach($groupId);
        return true;
    }
}

public function unfollow($userId)
{
    // confirming if already following
    $exist = $this->is_following($userId);
    // confirming that it is not you
    $its_me = $this->id == $userId;


    if ($exist && !$its_me) {
        // stop following if following
        $this->followings()->detach($userId);
        return true;
    } else {
        // do nothing if not following
        return false;
    }
}


public function is_following($userId) {
    return $this->followings()->where('follow_id', $userId)->exists();
}




   public function exit($groupId)
    {
    $exist = $this->is_joining($groupId);
   
    if ($exist) {
        $this->groups()->detach($groupId);
        return true;
    } else {
        return false;
    }
    }

    public function is_joining($groupId) {
    return $this->groups()->where('group_id', $groupId)->exists();
    }
    
    public function chat()
    {
        return $this->hasMany(Chat::class);
    }
}
