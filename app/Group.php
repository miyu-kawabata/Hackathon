<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'groupname', 'description','date'
    ];
    
    public function users()
    {
        return $this->hasMany(User::class, 'members', 'group_id', 'user_id')->withTimestamps();
    }
    
     public function chat()
    {
        return $this->hasMany(Chat::class);
    }
    


}
