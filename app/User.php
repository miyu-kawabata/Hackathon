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
}
