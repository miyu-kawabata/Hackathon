<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Group extends Model
{
    protected $fillable = [
        'groupname', 'description','date','category','organizer_id'
    ];
    
    public function user_participants()
    {
        return $this->belongsToMany(User::class, 'members', 'group_id', 'user_id');
    }
    
     public function chat()
    {
        return $this->hasMany(Chat::class);
    }
    
     public function organizer()
    {
        return $this->belongsTo(User::class);
    }
    
}