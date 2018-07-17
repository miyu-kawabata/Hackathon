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
                 <p><a href="/groups/{$group->id}/edit"><img src"images/EDIT.png" alt="おらんでい"></img></a></p>
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
             </ul> 
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
         
         <div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
				
				<div class="row">
					<div class="col-md-4">
						<h2>Get In Touch</h2>
					</div>
				</div>
				<form action="">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Phone">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-primary btn-md" value="Send Message">
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</form>
			</div>
     </div> 
 @endsection 
