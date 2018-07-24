<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>楽友</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	-->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="../favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('/css/flexslider.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('/css/flexslider.css')}}">
	<!-- Modal  -->
	<link href="{{asset('/css/modal.css')}}" rel="stylesheet">

	<!-- Modernizr JS -->
	<script src="{{asset('/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<div id="fh5co-logo"><a href="/">楽友</a></div>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li class="fh5co-active"><a href="/">MY PAGE</a></li>
					<li><a href="/groups">CATEGORY LIST</a></li>
					<li><a id="modal-open" class="button-link">CREATE A GROUP</a></li>
					<li><a href="/about">About</a></li>
					<li><a href="/logout">LOG OUT</a></li>
				</ul>
			</nav>
		</aside>
   		</div>
   
		<div id="fh5co-main">
		    @if (count($errors) > 0)
		<h2>グループの作成に失敗しました( *´艸｀)</h2>
    @foreach ($errors->all() as $error)
        <div class="alert alert-warning">{{ $error }}</div>
    @endforeach
@endif

@if($user->id == \Auth::user()->id)
  <div class="mypage-title">My page</div>
@else
  <div class="mypage-title">{{ $user->nickname }}'s page
  </div>
@endif
  <div class='form-info2'>
        <aside class="col-xs-4">
            <div class="panel panel-default"> 
                <div class="panel-heading">
                  <div class="panel-title">{{ $user->nickname }}
                  </div>
                 @include('user_follow.follow_button', ['user' => $user])  
                </div>
        
         
          
                <div class="panel-body">
                @if(isset($profile->avatar_filename))
                    <img class="media-object img-rounded img-responsive" style="height:300px" src="{{ asset('storage/images/' . $profile->avatar_filename) }}" alt="写真を挿入">
                @else
                    <img class="media-object img-rounded img-responsive"  style="height:300px" src="{{ asset('images/icon_default.jpg') }}" alt="写真を挿入">
                @endif
                    <p class='d'>About me...</p>
                 
               @if (isset($profile->sex))
               <p class="e">性別：{{ $profile->sex }}</p>
                @endif
                
                @if (isset($profile->hometown))
                 <p class="e">出身：{{ $profile->hometown }}</p>
                @endif
                
                @if (isset($profile->hobbies))
                 <p class="e">趣味：{{ $profile->hobbies }}</p>
                @endif
                
                @if (isset($profile->comment))
                 <p class="e">何か一言：{{ $profile->comment }}</p>
                @endif
                
                
                <div class="edit">
                    @if(Auth::user()->id == $user->id)
                    <p style="float:right"><a href="/users/{{$user->id}}/edit"><img src="{{ asset('images/EDIT.png')}}" alt="おらんでい"></img></a></p>
                    @endif
              
                </div>
            
             </div>
            </div>
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified"style="font-size:20px">
                <li role="presentation" class="{{ Request::is('participation/*/participants') ? 'active' : '' }}"><a href="{{ route('groups.participants', ['id' => $user->id]) }}">参加中 <span class="badge">{{ $count_groups }}</span></a></li>
                <li role="presentation" class="{{ Request::is('favorites/*/favoritings') ? 'active' : '' }}"><a href="{{ route('groups.favoritings', ['id' => $user->id]) }}">お気に入り <span class="badge">{{ $count_favorites }}</span></a></li>
                <li role="presentation" class="{{ Request::is('users/*/followings') ? 'active' : '' }}"><a href="{{ route('users.followings', ['id' => $user->id]) }}"class="followings">Followings <span class="badge1">{{ $count_followings }}</span></a></li>
                <li role="presentation" class="{{ Request::is('users/*/followers') ? 'active' : '' }}"><a href="{{ route('users.followers', ['id' => $user->id]) }}">Followers <span class="badge">{{ $count_followers }}</span></a></li>
                
            </ul>
            
             @if (count($users) > 0)
            <ul class="media-list">
                @foreach ($users as $user)
                    <li class="media">
                        <div class="media-left">
                            <div class="media-body">
                                <div class ="joymiyu col-xs-4">    
                                    @if(isset($user->profile->avatar_filename))
                                        <img class="joymiyu" src="{{ asset('storage/images/' . $user->profile->avatar_filename) }}" alt="写真を挿入">
                                    @else()
                                        <img class="joymiyu" src={{ asset('images/icon_default.jpg') }} alt="写真を挿入">
                                    @endif
                                </div>
                             <div class='e'>{!! link_to_route('tanins.show',$user->nickname, ['id' => $user->id]) !!}</div>
                             @if(isset($user->profile->comment))
                            {{ $user->profile->comment }}
                            @endif
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            {!! $users->render() !!}
            @endif
        </div>
    </div>
    </div>
    <div class="col-xs-8">
          	<div id="modal-content">
            
            
        {!! Form::model($group, ['route' => 'groups.store','method' => 'post', 'files' => true]) !!}
        
             
             <div class="form-group">
                 {!! Form::label ('groupname','グループ名') !!}
                 {!! Form::text ('groupname',null,['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                   {!! Form::label('category', 'カテゴリー') !!} 
            </div>       
                   
                   <div class="form-group">
                   	
                   	{!! Form::radio('category', 'cafeteria') !!}
                   	{!! Form::label('category', 'カフェテリア / ') !!}
                   	
                    {!! Form::radio('category', 'breaktime') !!}
                    {!! Form::label('category', '休憩時間 / ') !!}
                    
                    
                    {!! Form::radio('category', 'kataru') !!}
                    {!! Form::label('category', 'おしゃべり / ') !!}
                    
                    
                    {!! Form::radio('category', 'nomikai') !!}
                    {!! Form::label('category', '飲み会 / ') !!}
                    
                    {!! Form::radio('category', 'sports') !!}
                    {!! Form::label('category', 'スポーツ / ') !!}
                    
                    
                    {!! Form::radio('category', 'food') !!}
                    {!! Form::label('category', 'グルメ / ') !!}
                    
                    
                    {!! Form::radio('category', 'outdoor') !!}
                    {!! Form::label('category', 'アウトドア / ') !!}
                    
                    
                    {!! Form::radio('category', 'movie') !!}
                    {!! Form::label('category', '映画鑑賞 / ') !!}
                    
                    
                    {!! Form::radio('category', 'others') !!}
                    {!! Form::label('category', 'その他 / ') !!}
                    
                    </div>
            
            <div class="form-group">
                   {!! Form::label('category', '開催日時') !!} 
            </div>
            
            <div class="form-group">
                {!! Form::label ('year','年') !!}
                {!! Form::selectRange('year', 2018, 2030) !!}
            
                {!! Form::label ('month','月') !!}
                {!! Form::selectRange('month', 1, 12) !!}
            
                {!! Form::label ('date','日') !!}
                {!! Form::selectRange('date', 1, 31) !!} 
            </div>
            
            <div class="form-group">
                 {!! Form::label ('place','開催場所') !!}
                 {!! Form::text ('place',null,['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                 {!! Form::label ('description','詳細') !!}
                 {!! Form::text ('description',null,['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('file', '画像アップロード', ['class' => 'control-label']) !!}
            {!! Form::file('file',old('file'),['class' => 'form-control']) !!}
            </div>
            
               {!! Form::submit ('SUBMIT',['class' =>'btn btn-primary']) !!}

            {!! Form::close() !!}
           

	<p><a id="modal-close" class="button-link">閉じる</a></p>
</div>
</div>

    <!-- jQuery -->
	<script src="{{asset('/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('/js/jquery.waypoints.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('/js/jquery.flexslider-min.js')}}"></script>
	<!-- Modal -->
	<script src="{{asset('/js/modal.js')}}"></script>
	
	
	<!-- MAIN JS -->
	<script src="{{asset('js/main.js')}}"></script>

	</body>
</html>
