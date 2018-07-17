<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Group;
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
            $followings = $user->followings()->paginate(10);
            $profile=$user->profile()->getResults();
            $groups = $user->groups()->paginate(10);
            $group = new Group;
            
            $data = [
                'user' => $user,
                'profile' =>$profile,
                'users' => $followings,
                'groups' => $groups, 
                'group' => $group,
                
                
            ];
            $data += $this->counts($user);
            return view('users.followings', $data);
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
         
         

    
       $this->validate($request, [
            'comment' => 'required|max:191',
        ]);
        
        $filename = $request->file('file')->store('public/images');
        $request->user()->profile()->create([
        
            'sex'=>$request->sex,
            'hometown'=>$request->hometown,
            'hobbies'=>$request->hobbies,
            'comment' => $request->comment,
            'avatar_filename' => basename($filename),
            


        ]);
            return redirect('/');
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
            $group = new Group;
            
            $data = [
                'user' => $user,
                'profile' =>$profile,
                'group' => $group,
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
        $this->validate($request, ['sex','hometown','hobbies','comment'
        => 'max:191',
        ]);
        $filename = $request->file('file')->store('public/images');
        $profile=Profile::find($id);
        $profile->comment = $request->comment;
        $profile->avatar_filename = basename($filename);

          $hometown=[
  '' =>  '都道府県を選択して下さい',
  '1' => '北海道', 
  '2' => '青森県', 
  '3' => '岩手県', 
  '4' => '宮城県',
  '5' => '秋田県', 
  '6' => '山形県', 
  '7' => '福島県', 
  '8' => '茨城県',
  '9' => '栃木県', 
  '10' => '群馬県', 
  '11' => '埼玉県', 
  '12' => '千葉県',
  '13' => '東京都', 
  '14' => '神奈川県', 
  '15' => '新潟県', 
  '16' => '富山県',
  '17' => '石川県', 
  '18' => '福井県', 
  '19' => '山梨県', 
  '20' => '長野県', 
  '21' => '岐阜県', 
  '22' => '静岡県', 
  '23' => '愛知県', 
  '24' => '三重県',
  '25' => '滋賀県', 
  '26' => '京都府', 
  '27' => '大阪府', 
  '28' => '兵庫県',
  '29' => '奈良県', 
  '30' => '和歌山県', 
  '31' => '鳥取県', 
  '32' => '島根県',
  '33' => '岡山県', 
  '34' => '広島県', 
  '35' => '山口県', 
  '36' => '徳島県',
  '37' => '香川県',
  '38' => '愛媛県',
  '39' => '高知県', 
  '40' => '福岡県',
  '41' => '佐賀県', 
  '42' => '長崎県', 
  '43' => '熊本県', 
  '44' => '大分県',
  '45' => '宮崎県', 
  '46' => '鹿児島県', 
  '47' => '沖縄県',
  '48' => 'その他'
];

 $profile->sex = $request->sex;
 $profile->hometown = $hometown[$request->hometown];
  $profile->hobbies = $request->hobbies;
    
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
         $profile = \App\Profile::find($id);
        if (\Auth::user()->id === $profile->user_id) {
            $profile->delete();
        }
        return redirect()->back();
    }
    
      
    public function followings($id)
    {
        $user = User::find($id);
        $followings = $user->followings()->paginate(10);
        $profile=$user->profile()->getResults();
        $group = new Group;
        
        $data = [
            'user' => $user,
            'users' => $followings,
            'profile' =>$profile,
            'group' => $group,
        ];
        
        $data += $this->counts($user);
        return view('users.followings', $data);
    }
    public function followers($id)
    {
        $user = User::find($id);
        $profile=$user->profile()->getResults();
        $followers = $user->followers()->paginate(10);
        $group = new Group;
        $data = [
            'user' => $user,
            'users' => $followers,
             'profile' =>$profile,
             'group' => $group,
        ];
        $data += $this->counts($user);
        return view('users.followers', $data);
    }
    public function favorites($id) 
     { 
         $user = User::find($id); 
         $favorites = $user->favorites()->paginate(10); 
         $profile=$user->profile()->getResults();
         $group = new Group;
         
         $data = [ 
             'user' => $user, 
             'groups' => $favorites, 
             'profile' =>$profile,
             'group' => $group,
         ]; 
  
         $data += $this->counts($user); 
         return view('users.favoriting', $data); 
     } 
     
      public function participants($id) 
     { 
         $user = User::find($id); 
         $groups = $user->groups()->paginate(10); 
          $profile=$user->profile()->getResults();
          $group = new Group;
         $data = [ 
             'user' => $user, 
             'groups' => $groups,
             'profile' =>$profile, 
             'group' => $group,
              
         ]; 
  
         $data += $this->counts($user); 
         return view('users.join', $data); 
     } 
     
     

}