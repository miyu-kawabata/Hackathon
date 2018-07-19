<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Group;
use App\Chat;
class ChatsController extends Controller
{
    
    //神案件。保留
    public function store(Request $request ,$id)
    {
       $this->validate($request, [
            'chat' => 'required|max:191',
        ]);
        
        $user = \Auth::user();
        $group = Group::find($id);
        
         $chat = new Chat();
         $chat->chat = $request->chat;
         $chat->user_id = $user->id;
         $chat->group_id = $group->id;
         $chat->save();
            
        return redirect()->route('groups.chat',[$id]);
    
    }
      public function destroy($id)
    {
        $chat = \App\Chat::find($id);
        if (\Auth::user()->id === $chat->user_id) {
            $chat->delete();
        }
        return redirect()->back();
    }
}