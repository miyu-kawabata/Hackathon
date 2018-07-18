
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Marble &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
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
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="../css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">
	<link href="../../../css/modal.css" rel="stylesheet">
	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="/">Hackathon</a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li><a href="/">MY PAGE</a></li>
					<li><a href="/groups">CATEGORY</a></li>
					<li><a id="modal-open" class="button-link">CREATE GROUP</a></li>
					<li><a href="/logout">LOG OUT</a></li>
				</ul>
			</nav>
		</aside>

		<div id="fh5co-main">
			@if (count($errors) > 0)
		<h2>グループの作成/編集に失敗しました( *´艸｀)</h2>
    @foreach ($errors->all() as $error)
        <div class="alert alert-warning">{{ $error }}</div>
    @endforeach
@endif
			<aside class="col-xs-4 js-fullheight"> 
             <div class="panel panel-default"> 
                 <div class="panel-heading"> 
                     <h3 class="panel-title">{{ $group->groupname }}</h3> 
                 </div> 
                 <div class="panel-body"> 
                 	<img class="media-object img-rounded img-responsive" src="{{ asset('storage/images/' . $group->group_picture) }}" alt="写真を挿入">
                 </div>
                 <div class="group_profile">
	        	 	<ul style="list-style:none">
                	<li>＜カテゴリー名＞</li>
                	<li>{{ $group->category }}</li>
                	<li>＜開催日＞</li>
                	<li>{{ $group->date }}</li> 
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
          
          <div class="col-xs-8">
          	
          	<div id="modal-content">
        {!! Form::model($group, ['route' => 'groups.store','method' => 'post', 'files' => true]) !!}
           {!! Form::model($group, ['route' => 'groups.store']) !!}
        
             
            <div class="form-group">
                 {!! Form::label ('groupname','GROUP NAME') !!}
                 {!! Form::text ('groupname',null,['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                
                   {!! Form::label('category', 'CATEGORY') !!} 
            </div>       
                   
                   <div class="form-group">
                  
                  　{!! Form::radio('category', 'nomikai') !!}
                    {!! Form::label('category', 'nomikai') !!}
                    
                    {!! Form::radio('category', 'food') !!}
                    {!! Form::label('category', 'food') !!}
                    
                    {!! Form::radio('category', 'sports') !!}
                    {!! Form::label('category', 'sports') !!}
                    
                    {!! Form::radio('category', 'career') !!}
                    {!! Form::label('category', 'career') !!}
                    
                    {!! Form::radio('category', 'shopping') !!}
                    {!! Form::label('category', 'shopping') !!}
                    
                    {!! Form::radio('category', 'movie') !!}
                    {!! Form::label('category', 'movie') !!}
                    
                    {!! Form::radio('category', 'outdoor') !!}
                    {!! Form::label('category', 'outdoor') !!}
                    
                    {!! Form::radio('category', 'others') !!}
                    {!! Form::label('category', 'others') !!}
                    
            </div>
            
            
            <div class="form-group">
                 {!! Form::label ('date','DATE') !!}
                 {!! Form::text ('date',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                 {!! Form::label ('description','DESCRIPTION') !!}
                 {!! Form::text ('description',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
            {!! Form::label('file', '画像アップロード', ['class' => 'control-label']) !!}
            {!! Form::file('file',old('file'),['class' => 'form-control']) !!}
            </div>
            
               {!! Form::submit ('SUBMIT',['class' =>'btn btn-primary']) !!}

            {!! Form::close() !!}
            @if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-warning">{{ $error }}</div>
    @endforeach
@endif
	<p><a id="modal-close" class="button-link">閉じる</a></p>
</div>
             <ul class="nav nav-tabs nav-justified"> 
                <li role="presentation" class="{{ Request::is('participation/*/participants') ? 'active' : '' }}"><a href="{{ route('groups.show', ['id' => $group->id]) }}">参加者</a></li>
                <li role="presentation" class="{{ Request::is('groups/*/chat') ? 'active' : '' }}"><a href="{{ route('groups.chat', ['id' => $group->id]) }}">CHAT</a></li>     
                  
             </ul>                  
                 <ul> 
                     @foreach ($participants as $participant) 
                     <div>
                      	<div class ="joymiyu col-xs-4">
                	<img class="media-object img-rounded img-responsive" src="{{ asset('storage/images/' . $participant->profile->avatar_filename) }}" alt="写真を挿入">
                </div>
                <div class ="col-xs-8">
                      <p>{!! link_to_route('tanins.show',$participant->nickname, ['id' => $participant->id]) !!}</p> 
                      @include('user_follow.follow_button', ['user' => $user])
                     </div>
                     @endforeach 
                 </ul> 
 
                  

		</div>
	</div>

	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="../js/jquery.flexslider-min.js"></script>
	<!-- JavaScriptの読み込み -->
<script src="../../../js/modal.js"></script>
	
	<!-- MAIN JS -->
	<script src="../js/main.js"></script>

	</body>
</html>

