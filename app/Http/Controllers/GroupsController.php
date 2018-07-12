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
        
        $nomikai = Group::find_by_group('nomikai')->paginate(4);
        $food = Group::find_by_group('food')->paginate(4);
        $sports = Group::find_by_group('sports')->paginate(4);
        $career = Group::find_by_group('career')->paginate(4);
        $shopping = Group::find_by_group('shopping')->paginate(4);
        $movie = Group::find_by_group('movie')->paginate(4);
        $outdoor = Group::find_by_group('outdoor')->paginate(4);
        $others = Group::find_by_group('others')->paginate(4);
        
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
        return view('groups.group', [
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
           ]);
           
        $user = \Auth::user();
        $group = new Group;
        $group->groupname = $request->groupname;  
        $group->category = $request->category;
        $group->description = $request->description;
        $group->date = $request->date;
        $group->organizer_id = $user->id;
        $group->save();
        
        $participants = $group->user_participants() -> paginate(10);
        $chats = $group->chat()->getResults();
        $idd = $group->organizer_id;
        $organizer = User::find($idd);
        return view('groups.group',[
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
        ]);
        $group->groupname = $request->groupname;
        $group->category = $request->category;
        $group->date = $request->date;
        $group->description = $request->description;
        $group->save();
        
        $participants = $group->user_participants() -> paginate(10);
        $chats = $group->chat()->getResults();
        $user = \Auth::user();
        return view('groups.group',[
            'group' => $group,
            'user' => $user,
            'chats'=>$chats,
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