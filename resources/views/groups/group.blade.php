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
                <li>{{ $group->date }}</li>
                <li>{{ $group->description }}</li>
                @include('participate.join_button', ['user' => $user])
                
            
            </ul>
        </div>

         <div class="col-xs-4">
            <ul class="nav nav-tabs nav-justified">
                
                
                <ul>
                    <li>参加者一覧</li>
                    @foreach ($participants as $participant)
                    <li>{{ $participant->nickname }}</li>
                    @endforeach
                </ul>
                
            </ul>
            <p> {!! link_to_route('groups.edit', '編集ページ',  ['id' => $group->id]) !!}</p>
                  {!! Form::open(['route' => ['chats.store', $group->id],'method' => 'post'])!!}
                      <div class="form-group">
                          {!! Form::textarea('chat', old('chat'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
            @foreach ($chats as $chat)
             <div class="media-body">
            <div>
                {!! link_to_route('users.index', $user->nickname) !!} <span class="text-muted">posted at {{ $chat->created_at }}</span>
            </div>
            <div>
                <p>{!! nl2br(e($chat->chat)) !!}</p>
            </div>
            @endforeach
           
                
                
        </div>
    </div>
@endsection
