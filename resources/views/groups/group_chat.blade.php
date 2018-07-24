
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
	<link rel="stylesheet" href="../../../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../../../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../../../css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="../../../css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="../../../css/style.css">
	<link href="../../../css/modal.css" rel="stylesheet">
	
	<!-- Modernizr JS -->
	<script src="../../../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="../../../js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="/">楽友</a></h1>
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

		<div id="fh5co-main">
			@if (count($errors) > 0)
		<h2>必要事項を記入してください。</h2>
   			 @foreach ($errors->all() as $error)
        <div class="alert alert-warning">{{ $error }}</div>
   			 @endforeach
			 @endif
			<aside class="col-xs-5"> 
             <div class="panel panel-default"> 
                 <div class="panel-heading"> 
                     <h3 class="panel-title">{{ $group->groupname }}</h3> 
                 </div> 
                 <div class="panel-body"> 
                 	<img class="media-object img-rounded img-responsive" style="height:300px"src="{{ $group->group_picture }}" alt="写真を挿入">
                 </div>
                 <div class="group_profile">
	        	 	<ul class ="group-description">
                	<li>＜カテゴリー名＞</li>
                	<li>{{ $group->category }}</li>
                	<li>＜開催日＞</li>
                	<li>{{ $group->year }}/{{ $group->month }}/{{ $group->date }}</li>
                	<li>＜開催場所＞</li>
                	<li>{{ $group->place }}</li>
                	<li>＜説明＞</li>
                	<li>{{ $group->description }}</li>
                	<li>＜オーガナイザー＞</li> 
                	<li>{!! link_to_route('tanins.show',$organizer->nickname, ['id' => $organizer->id]) !!}</li>
                </ul>
    		     		<div class="edit">
            				@if(Auth::user()->id == $organizer->id)
                				<p style="float:right"><a href="/groups/{{$group->id}}/edit"><img src="{{ asset('images/EDIT.png')}}" alt="おらんでい"></img></a></p>
            		 		@endif
            			</div>
                 </div>
                 
             </div>
                <div class="col-xs-6">
            @include('participate.join_button', ['user' => $user])
            </div>
            	<div class="col-xs-6">
        	@include('groups.favorite_button', ['groups' => $group]) 
             </div>
                  

         </aside>
          
          <div class ="col-xs-7">
          	
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
                   	
                   	{!! Form::radio('category', 'カフェテリア') !!}
                   	{!! Form::label('category', 'カフェテリア / ') !!}
                   	
                    {!! Form::radio('category', '休憩時間') !!}
                    {!! Form::label('category', '休憩時間 / ') !!}
                    
                    
                    {!! Form::radio('category', 'おしゃべり') !!}
                    {!! Form::label('category', 'おしゃべり / ') !!}
                    
                    
                    {!! Form::radio('category', '飲み会') !!}
                    {!! Form::label('category', '飲み会 / ') !!}
                    
                    {!! Form::radio('category', 'スポーツ') !!}
                    {!! Form::label('category', 'スポーツ / ') !!}
                    
                    
                    {!! Form::radio('category', 'グルメ') !!}
                    {!! Form::label('category', 'グルメ / ') !!}
                    
                    
                    {!! Form::radio('category', 'アウトドア') !!}
                    {!! Form::label('category', 'アウトドア / ') !!}
                    
                    
                    {!! Form::radio('category', '映画') !!}
                    {!! Form::label('category', '映画鑑賞 / ') !!}
                    
                    
                    {!! Form::radio('category', 'その他') !!}
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

		
		
		
             <ul class="nav nav-tabs nav-justified" style="font-size:20px"> 
                <li role="presentation" class="{{ Request::is('participation/*/participants') ? 'active' : '' }}"><a href="{{ route('groups.show', ['id' => $group->id]) }}">参加者<span class="badge">{{ $participants_count }}</span></a></li>
                <li role="presentation" class="{{ Request::is('groups/*/chat') ? 'active' : '' }}"><a href="{{ route('groups.chat', ['id' => $group->id]) }}" class="chat">CHAT</a></li>
             </ul>
           
           	<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
					
					{!! Form::open(['route' => ['chats.store', $group->id],'method' => 'post'])!!}
					<div class="row">
								<div class="col-offset-sm-2 col-sm-8">
									<div class="form-group1">
										{!! Form::textarea('chat', old('chat'), ['class' => 'form-control', 'rows' => '2', 'placeholder'=>"Say something"]) !!} 
									</div>
									<div class="form-group2">
										{!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!} 
									</div>
								</div>
					</div>
				 {!! Form::close() !!}
			</div>
           
             
             @foreach ($chats as $chat) 
             <div style="clear:both">
             <div class="media-body"> 
             	<div class ="joymiyu col-xs-3">
                	@if(isset($participant->profile->avatar_filename))
                            <img class="joymiyu" src="{{ $chat->user->profile->avatar_filename }}" alt="写真を挿入">
                        @else
                            <img class="joymiyu" src={{ asset('images/icon_default.jpg') }} alt="写真を挿入">
                        @endif
                </div>
                <div class ="col-xs-8">
                	 {!! link_to_route('tanins.show', $chat->user->nickname, ['id' => $chat->user_id]) !!} <span class="text-muted">posted at {{ $chat->created_at }}</span> 
               		 	<p class="chat2">{!! nl2br(e($chat->chat)) !!}</p>
                  	@if (Auth::user()->id == $chat->user_id)
                    	{!! Form::open(['route' => ['chats.destroy', $chat->id], 'method' => 'delete']) !!}
                        	{!! Form::submit('Delete', ['class' => 'btna btn-danger btn-xs-1']) !!}
                    	{!! Form::close() !!}
                	@endif
               	</div> 
              
             @endforeach 
         	</div>
         	</div>
         </div>
	</div>
	</div>
	<!-- jQuery -->
	<script src="../../../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../../../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../../../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../../../js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="../../../js/jquery.flexslider-min.js"></script>
	<!-- JavaScriptの読み込み -->
<script src="../../../js/modal.js"></script>
	
	<!-- MAIN JS -->
	<script src="../../../js/main.js"></script>

	</body>
</html>

