<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Group;

class GroupsController extends Controller
{
    public function index()
    {
        
    }
    
    public function show($id)
    {
        if (\Auth::check()) {
        $groupname = Group::find($id);
        
        $data = [
            'groupname' => $groupname,
            'date' => $date,
            'description' => $description
        ];

        return view('groups.group', $data);
    }
    }
    
}
