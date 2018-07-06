<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $chats = $group->chat();
        $participants = $group->user_participants()->paginate(10);
        dd($participants);
        return view('groups.group', [
            'group' => $group,
            'user' => $user,
            'chats'=>$chats,
            'participants'=>$participants,
            ]);
            
    }
}
    public function create()
    {
       $group = new Group;
       
       return view('groups.create',[
           
           'group' => $group,
           ]);
    
    }
    
    public function store(Request $request)
    {
       $this->validate($request,[
           
          'groupname' => 'required|max:20',
          'description'=> 'required|max:191',
          'date'=> 'required|max:50',
           ]);
           
        $group = new Group;
        $group->groupname = $request->groupname;    // add
        $group->description = $request->description;
        $group->date = $request->date;
        $group->save();

        $user = \Auth::user();
        return view('groups.group',[
            'group' => $group,
            'user' => $user
            ]);
        
    }
    
    public function edit($id){
        
        $group = Group::find($id);
    return view('groups.edit',[
           
           'group' => $group,
           ]);
    }
    
    public function update(Request $request, $id){
                $group = Group::find($id);
                
                $this->validate($request, [
            'groupname' => 'required|max:10',   // add
            'date' => 'required|max:191',
            'description' => 'required|max:191',
        ]);

        $group->groupname = $request->groupname;    // add
        $group->date = $request->date;
        $group->description = $request->description;
        $group->save();
        
        
        $user = \Auth::user();
        return view('groups.group',[
            'group' => $group,
            'user' => $user,
            ]);
        
        
    }


}
