<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
     protected $fillable = [
       'sex','hometown','hobbies' ,'comment','avatar_filename',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
