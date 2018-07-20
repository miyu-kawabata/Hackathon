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

			<div id="fh5co-logo"><a href="/"><div class='b'>Hackathon</div></a></div>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li class="fh5co-active"><a href="/">MY PAGE</a></li>
					<li><a href="/groups">CATEGORY LIST</a></li>
					<li><a href="/groups/create">CREATE GROUP</a></li>
					<li><a href="/logout">LOG OUT</a></li>
				</ul>
			</nav>
		</aside>
   
   
	<div id="fh5co-main">
		<div class='form-info'>
         <aside class="col-xs-4">
         
           
               <div class="panel-heading">
              	 		<div class="panel-title">
              	 			
              	 			<div class='a'>{{ $user->nickname }}</div>
        					@if(Auth::user()->id == $user->id)
         					<p style="float:right"><a href="/users/{{$user->id}}/edit"><img src="{{ asset('images/EDIT.png')}}" alt="おらんでい"></img></a></p>
         					@endif
      			 		</div>
 　　　	　　             
                		<div class="panel-body">
                   		<img class="media-object img-rounded img-responsive" src="{{ asset('storage/images/' . $profile->avatar_filename) }}" alt="写真を挿入">
                		</div>
                 
                 		@include('user_follow.follow_button', ['user' => $user])
                      
                      <div class="panel-body">
               			 <ul class='d'>About me...</ul>
                 
              			 @if (isset($profile->sex))
               		    <li class='e'>性別：{{ $profile->sex }}</li>
               			 @endif
                
                 		@if (isset($profile->hometown))
                		<li class='e'>出身：{{ $profile->hometown }}</li>
               		　 	@endif
                
               			@if (isset($profile->hobbies))
                 		<li class='e'>趣味：{{ $profile->hobbies }}</li>
                		@endif
                
                		@if (isset($profile->comment))
                 		<li class='e'>何か一言：{{ $profile->comment }}</li>
                		@endif
                	</div>
                
              
            　
       
         　	</div>
         　
         </aside>
        
        
        <div class="col-xs-8">
        	
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('users/*/followings') ? 'active' : '' }}"><a href="{{ route('users.followings', ['id' => $user->id]) }}"><div class='c'>Followings <span class="badge">{{ $count_followings }}</span></div></a></li>
                <li role="presentation" class="{{ Request::is('users/*/followers') ? 'active' : '' }}"><a href="{{ route('users.followers', ['id' => $user->id]) }}"><div class='c'>Followers <span class="badge">{{ $count_followers }}</span></div></a></li>
                <li role="presentation" class="{{ Request::is('favorites/*/favoritings') ? 'active' : '' }}"><a href="{{ route('groups.favoritings', ['id' => $user->id]) }}"><div class='c'>Favorites <span class="badge">{{ $count_favorites }}</span></div></a></li>
                <li role="presentation" class="{{ Request::is('participation/*/participants') ? 'active' : '' }}"><a href="{{ route('groups.participants', ['id' => $user->id]) }}"><div class='c'>Joins <span class="badge">{{ $count_groups }}</span></div></a></li>

            </ul>
            
            @if (count($users) > 0)
            <ul class="media-list">
            @foreach ($users as $user)
                <li class="media">
                    <div class="media-left">
                        <div class="media-body">
            				<div class='e'>{{ $user->nickname }}</div>
           
                			<p>{!! link_to_route('tanins.show', 'View profile', ['id' => $user->id]) !!}</p>
                        
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
    <!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

