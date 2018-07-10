@extends('layouts.app')
 

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->nickname }}</h3>
                </div>
                <div class="panel-body">
                    <img class="media-object img-rounded img-responsive" src="" alt="写真を挿入">
                </div>
                  @include('user_follow.follow_button', ['user' => $user])
                 <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('users/*/followings') ? 'active' : '' }}"><a href="{{ route('users.followings', ['id' => $user->id]) }}">Followings <span class="badge">{{ $count_followings }}</span></a></li>
                <li role="presentation" class="{{ Request::is('users/*/followers') ? 'active' : '' }}"><a href="{{ route('users.followers', ['id' => $user->id]) }}">Followers <span class="badge">{{ $count_followers }}</span></a></li>
                 <li role="presentation" class="{{ Request::is('favorites/*/favoritings') ? 'active' : '' }}"><a href="{{ route('groups.favoritings', ['id' => $user->id]) }}">Favorites <span class="badge">{{ $count_favorites }}</span></a></li>  
                  </ul>
            </div>
           
        </aside>
        <div class="col-xs-8">
            
    <ul>
        
        @if (isset($profile->comment))
        <li>
            {{ $profile->comment }}
        </li>
        @endif
        
        
        
    </ul>
        </div>
        <div>
        @if(Auth::user()->id == $user->id)
         <p> {!! link_to_route('users.edit', '編集ページ',  ['id' => $user->id]) !!}</p>
         @endif
        </div>
        <!--/編集ボタン作った/-->
    </div>
@endsection