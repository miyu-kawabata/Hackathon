<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $profile=$user->profile()->getResults();

            $data = [
                'user' => $user,
                'profile' =>$profile,
                
                
            ];
            $data += $this->counts($user);
            return view('users.show', $data);
        }else {
            return view('welcome');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->validate($request, [
            'content' => 'required|max:191',
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $data=[];
       if (\Auth::check()) {
            $user = \Auth::user();  
            $profile = new profile;
            $user->profile()->create([
            
         
            $profile->comment = $request->comment
        
        ]);
        
        $profile=$user->profile();
    
            $data = [
                'user' => $user,/*name,e-mail,password*/
                'profile' =>$profile,
                
            
            
            ];

                 
            
            return view('users.show', $data);
            }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      if (\Auth::check()) {
            $user = \Auth::user();
            $profile=$user->profile()->getResults();
          
            $data = [
                'user' => $user,
                'profile' =>$profile,
            ];
            
            
            return view('users.edit', $data);
            
            
           
        }else {
            return view('welcome');
    
        }    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'comment' => 'max:191',
        ]);
         $profile=Profile::find($id);
         $profile->comment = $request->comment;
    
            $profile->save();
            
       return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $micropost = \App\Profile::find($id);

        if (\Auth::user()->id === $profile->user_id) {
            $profile->delete();
        }

        return redirect()->back();
    }
    
      
    public function followings($id)
    {
        $user = User::find($id);
        $followings = $user->followings()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $followings,
        ];

        $data += $this->counts($user);

        return view('users.followings', $data);
    }

    public function followers($id)
    {
        $user = User::find($id);
        $followers = $user->followers()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $followers,
        ];

        $data += $this->counts($user);

        return view('users.followers', $data);
    }
}
