<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Group;
use App\User;
use JD\Cloudder\Facades\Cloudder;
class GroupsController extends Controller
{
    public function index()
    {
        //category pageにつながる
        $group = Group::all();
        $cafeteria = $group->where('category','カフェテリア')->sortByDesc('created_at');
        $breaktime = $group->where('category','休憩時間')->sortByDesc('created_at');
        $kataru = $group->where('category','おしゃべり')->sortByDesc('created_at');
        $nomikai = $group->where('category','飲み会')->sortByDesc('created_at');
        $sports = $group->where('category','スポーツ')->sortByDesc('created_at');
        $food = $group->where('category','グルメ')->sortByDesc('created_at');
        $outdoor = $group->where('category','アウトドア')->sortByDesc('created_at'); 
        $movie = $group->where('category','映画')->sortByDesc('created_at');
        $others = $group->where('category','その他')->sortByDesc('created_at');
        $career = $group->where('category','career')->sortByDesc('created_at');
        $shopping = $group->where('category','shopping')->sortByDesc('created_at');
       
        $group = new Group;
        
        return view('categories.category', [
            'groups' => $group,
            'cafeterias' => $cafeteria,
            'breaktimes' => $breaktime,
            'katarus' => $kataru,
            'nomikais' => $nomikai,
            'sports' => $sports,
            'foods' => $food,
            'outdoors' => $outdoor,
            'movies' => $movie,
            'others' => $others,
            'careers' => $career,
            'shoppings' => $shopping,
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
        $participants_count =  $participants->count();
        
        $idd = $group->organizer_id;
        $organizer = User::find($idd);
        return view('groups.group_participant', [
            'group' => $group,
            'user' => $user,
            'chats'=>$chats,
            'participants'=>$participants,
            'organizer'=>$organizer,
            'participants_count' =>$participants_count,
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
          'description'=> 'max:191',
          'year'=> 'required|max:50',
          'month'=> 'required|max:50',
          'date'=> 'required|max:50',
          'place'=> 'max:50',
          
           ]);
           
       if($request->file('file')){
        
        Cloudder::upload($request->file('file'), null, ['folder' => "app/pictures"]);
        $url = Cloudder::getResult()['url'];
        $filename = $request->file('file')->store('public/images');
        $group->group_picture = $url;
        }
        
        $user = \Auth::user();
        $group = new Group;
        $group->groupname = $request->groupname;  
        $group->category = $request->category;
        $group->description = $request->description;
        $group->year = $request->year;
        $group->month = $request->month;
        $group->place = $request->place;
        $group->date = $request->date;
        $group->organizer_id = $user->id;
        
        $group->save();
        
        \Auth::user()->join($group->id);
        
        $participants = $group->user_participants() -> paginate(10);
        $chats = $group->chat()->getResults();
        $idd = $group->organizer_id;
        $participants_count =  $participants->count();
        $organizer = User::find($idd);
        return view('groups.group_participant',[
            'group' => $group,
            'user' => $user,
            'participants' =>$participants,
            'chats'=>$chats,
            'organizer'=>$organizer,
            'participants_count' =>$participants_count,
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
            'groupname' => 'required|max:10',
            'year' => 'required|max:191',
            'month' => 'required|max:191',
            'date' => 'required|max:191',
            'place' => 'required|max:191',
            'description' => 'required|max:191',
           
        ]);
        if($request->file('file')){
        
        Cloudder::upload($request->file('file'), null, ['folder' => "app/pictures"]);
        $url = Cloudder::getResult()['url'];
        $filename = $request->file('file')->store('public/images');
        $group->group_picture = $url;
        }
        $user = \Auth::user();
        $group->groupname = $request->groupname;
        $group->category = $request->category;
        $group->year = $request->year;
        $group->month = $request->month;
        $group->date = $request->date;
        $group->place = $request->place;
        $group->description = $request->description;
        $group->organizer_id = $user->id;
        $group->save();
        
        $participants = $group->user_participants() -> paginate(10);
        $chats = $group->chat()->getResults();
        $idd = $group->organizer_id;
        $organizer = User::find($idd);
        $participants_count =  $participants->count();
        
        return view('groups.group_participant',[

            'group' => $group,
            'user' => $user,
            'chats'=>$chats,
            'participants' =>$participants,
            'organizer'=> $organizer,
            'participants_count' =>$participants_count,
            
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
        $participants_count =  $participants->count();
        $idd = $group->organizer_id;
        $organizer = User::find($idd);
        return view('groups.group_chat', [
            'group' => $group,
            'user' => $user,
            'chats'=>$chats,
            'participants'=>$participants,
            'organizer'=>$organizer,
            'participants_count' =>$participants_count,
            ]);
            
    }
    }
}