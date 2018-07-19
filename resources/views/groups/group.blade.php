@extends('layouts.app') 

 
 @section('content') 
     <div class="row"> 
         <aside class="col-xs-4"> 
             <div class="panel panel-default"> 
                 <div class="panel-heading"> 
                     <h3 class="panel-title">{{ $group->groupname }}</h3> 
                 </div> 
                 <div class="panel-body"> 
                  
                 </div> 
             </div> 
              
         </aside> 
         <div class="col-xs-4"> 
              
         <ul> 
                 <li>{{ $group->category }}</li> 
                  <li>{{ $group->year }}</li>
                   <li>{{ $group->month }}</li> 
                 <li>{{ $group->date }}</li> 
                 <li>{{ $group->place }}</li> 
                 <li>{{ $group->description }}</li> 
                 @include('participate.join_button', ['user' => $user]) 
                  @include('groups.favorite_button', ['groups' => $group]) 
                  
                 オーガナイザー 
                 <p>{!! link_to_route('tanins.show',$organizer->nickname, ['id' => $organizer->id]) !!}</p> 
             </ul> 
         </div> 
 
 
          <div class="col-xs-4"> 
             <ul class="nav nav-tabs nav-justified"> 
                  
                  
                 <ul> 
                     <li class='f'>参加者一覧</li>
                     @if (count($participant_count)>0)
                     @foreach ($participants as $participant) 
                    <p>{!! link_to_route('tanins.show',$participant->nickname, ['id' => $participant->id]) !!}</p> 
                 @endforeach 
                 @endif
                 </ul> 
                  
             </ul> 
             @if(Auth::user()->id == $organizer->id) 
             <p> {!! link_to_route('groups.edit', '編集ページ',  ['id' => $group->id]) !!}</p> 
             @endif 
             {!! Form::open(['route' => ['chats.store', $group->id],'method' => 'post'])!!} 
                       <div class="form-group"> 
                           {!! Form::textarea('chat', old('chat'), ['class' => 'form-control', 'rows' => '2']) !!} 
                           {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!} 
                   </div> 
                   {!! Form::close() !!} 
             @foreach ($chats as $chat) 
              <div class="media-body"> 
             <div> 
                 {!! link_to_route('tanins.show', $chat->user->nickname, ['id' => $chat->user_id]) !!} <span class="text-muted">posted at {{ $chat->created_at }}</span> 
 
             </div> 
              
             <div> 
                 <p>{!! nl2br(e($chat->chat)) !!}</p> 
                  @if (Auth::user()->id == $chat->user_id)
                    {!! Form::open(['route' => ['chats.destroy', $chat->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
             </div> 
             @endforeach 
             
                  
                  
         </div> 
     </div> 
 @endsection 
