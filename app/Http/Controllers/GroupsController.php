<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Group;
use App\User;
class GroupsController extends Controller
{
    public function index()
    {
        //category pageにつながる
        $group = Group::all();
        $nomikai = $group->where('category','nomikai')->sortByDesc('created_at');
        $food = $group->where('category','food')->sortByDesc('created_at');
        $sports = $group->where('category','sports')->sortByDesc('created_at');
        $career = $group->where('category','career')->sortByDesc('created_at');
        $shopping = $group->where('category','shopping')->sortByDesc('created_at');
        $movie = $group->where('category','movie')->sortByDesc('created_at');
        $outdoor = $group->where('category','outdoor')->sortByDesc('created_at');
        $others = $group->where('category','others')->sortByDesc('created_at');
        $group = new Group;
        
        return view('categories.category', [
            'groups' => $group,
            'nomikais' => $nomikai,
            'foods' => $food,
            'sports' => $sports,
            'careers' => $career,
            'shoppings' => $shopping,
            'movies' => $movie,
            'outdoors' => $outdoor,
            'others' => $others,
            'group' => $group,
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
        
        $idd = $group->organizer_id;
        $organizer = User::find($idd);
        return view('groups.group_participant', [
            'group' => $group,
            'user' => $user,
            'chats'=>$chats,
            'participants'=>$participants,
            'organizer'=>$organizer,
            
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
          'file' => 'required',
           ]);
        $filename = $request->file('file')->store('public/images');
        
        $user = \Auth::user();
        $group = new Group;
        $group->groupname = $request->groupname;  
        $group->category = $request->category;
        $group->description = $request->description;
        $group->date = $request->date;
        $group->organizer_id = $user->id;
        $group->group_picture = basename($filename);
        $group->save();
        
        \Auth::user()->join($group->id);
        
        $participants = $group->user_participants() -> paginate(10);
        $chats = $group->chat()->getResults();
        $idd = $group->organizer_id;
        $organizer = User::find($idd);
        return view('groups.group_participant',[
            'group' => $group,
            'user' => $user,
            'participants' =>$participants,
            'chats'=>$chats,
            'organizer'=>$organizer,
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
            'file' => 'required',
        ]);
        
        $filename = $request->file('file')->store('public/images');
        
        $user = \Auth::user();
        $group->groupname = $request->groupname;
        $group->category = $request->category;
        $group->date = $request->date;
        $group->description = $request->description;
        $group->organizer_id = $user->id;
        $group->group_picture = basename($filename);
        $group->save();
        
        $participants = $group->user_participants() -> paginate(10);
        $chats = $group->chat()->getResults();
        $idd = $group->organizer_id;
        $organizer = User::find($idd);
        
        return view('groups.group_participant',[

            'group' => $group,
            'user' => $user,
            'chats'=>$chats,
            'participants' =>$participants,
            'organizer'=> $organizer,
            ]);
        
        
    }
  
   public function destroy($id)
    {
        $group = \App\Group::find($id);
            $group->delete();
        
        return redirect('/groups');
    }
    
    public function chat($id)
    {
        
        if (\Auth::check()) {
        $group = Group::find($id);
        $user = \Auth::user();
        $chats = $group->chat()->getResults();
        $participants = $group->user_participants()->paginate(10);
        
        $idd = $group->organizer_id;
        $organizer = User::find($idd);
        return view('groups.group_chat', [
            'group' => $group,
            'user' => $user,
            'chats'=>$chats,
            'participants'=>$participants,
            'organizer'=>$organizer,
            ]);
            
    }
    }
}