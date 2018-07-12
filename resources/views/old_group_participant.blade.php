@extends('layouts.app') 

 
 @section('content') 
     <div class="row"> 
         <aside class="col-xs-4"> 
             <div class="panel panel-default"> 
                 <div class="panel-heading"> 
                     <h3 class="panel-title">{{ $group->groupname }}</h3> 
                 </div> 
                 <div class="panel-body"> 
                  <img class="media-object img-rounded img-responsive" src="" alt="写真を挿入">
                 </div> 
                 
                 
                 <ul> 
                 <li>カテゴリー名</li>
                 <li>{{ $group->category }}</li>
                 <li>開催日</li>
                 <li>{{ $group->date }}</li> 
                 <li>説明</li>
                 <li>{{ $group->description }}</li>
                 <li>オーガナイザー</li> 
                 <li>{!! link_to_route('tanins.show',$organizer->nickname, ['id' => $organizer->id]) !!}</li>
                 </ul>
                 @if(Auth::user()->id == $organizer->id) 
                 <p> {!! link_to_route('groups.edit', '編集ページ',  ['id' => $group->id]) !!}</p> 
                 @endif
             </div> 
              
         </aside> 
         
 
 
          <div class="col-xs-8"> 
          @include('participate.join_button', ['user' => $user])
          @include('groups.favorite_button', ['groups' => $group]) 
          </div>
          
          <div class="col-xs-8">
             <ul class="nav nav-tabs nav-justified"> 
                <li role="presentation" class="{{ Request::is('participation/*/participants') ? 'active' : '' }}"><a href="{{ route('groups.show', ['id' => $user->id]) }}">参加者</a></li>
                <li role="presentation" class="{{ Request::is('groups/*/chat') ? 'active' : '' }}"><a href="{{ route('groups.chat', ['id' => $user->id]) }}">CHAT</a></li>     
                  
                 <ul> 
                     @foreach ($participants as $participant) 
                     <div>
                      <img class="media-object img-rounded img-responsive" src="" alt="写真を挿入">
                      <p>{!! link_to_route('tanins.show',$participant->nickname, ['id' => $participant->id]) !!}</p> 
                      @include('user_follow.follow_button', ['user' => $user])
                     </div>
                     @endforeach 
                 </ul> 
                  
             </ul> 
                  
         </div> 
     </div> 
 @endsection 
