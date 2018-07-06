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
        return $this->hasMany(User::class, 'members', 'user_id', 'group_id')->withTimestamps();
    }
    
    


}
