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
        $sports = $group->where('category','スポーツ')->sortByDesc('created_at');
        $foods = $group->where('category','グルメ')->sortByDesc('created_at');
        $musics = $group->where('category','音楽')->sortByDesc('created_at');
        $cosmes = $group->where('category','美容')->sortByDesc('created_at');
        $fashions = $group->where('category','ファッション')->sortByDesc('created_at');
        
        return view('categories.category', [
            'groups' => $group,
            'sports' => $sports,
            'foods' => $foods,
            'musics' => $musics,
            'cosmes' => $cosmes,
            'fashions' =>$fashions,
            ]);
    }
    
    public function show($id)
    {
        //category pageからgroup pageを表示する
        
        if (\Auth::check()) {
        $group = Group::find($id);
        $user = \Auth::user();
        $chats = $group->chat()->getResults();
        $participants = $group->user_participants()->paginate(10);
        
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
        $group->groupname = $request->groupname;  
        $group->category = $request->category;
        $group->description = $request->description;
        $group->date = $request->date;
        $group->save();
        
        $participants = $group->user_participants() -> paginate(10);

        $user = \Auth::user();
        return view('groups.group',[
            'group' => $group,
            'user' => $user,
            'participants' =>$participants,
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

        $group->groupname = $request->groupname;
        $group->category = $request->category;
        $group->date = $request->date;
        $group->description = $request->description;
        $group->save();
        
         $participants = $group->user_participants() -> paginate(10);
        
        $user = \Auth::user();
        return view('groups.group',[
            'group' => $group,
            'user' => $user,
            'participants' =>$participants,
            ]);
        
        
    }
  
   public function destroy($id)
    {
        $group = \App\Group::find($id);
            $group->delete();
        

        return redirect('/groups');
    }

}
