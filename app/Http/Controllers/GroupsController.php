<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Group;

class GroupsController extends Controller
{
    public function index()
    {
        //テスト用
        //category pageにつながる
        
        $group = Group::all();
        
        return view('categories.category', [
            'groups' => $group,
            ]);
    }
    
    public function show($id)
    {
        //category pageからgroup pageを表示する
        
        if (\Auth::check()) {
        $group = Group::find($id);
        $user = \Auth::user();
        
        return view('groups.group', [
            'group' => $group,
            'user' => $user
            ]);
    }
    }
    
}
