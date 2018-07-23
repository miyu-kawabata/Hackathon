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

			<div id="fh5co-logo"><a href="/">Hackathon</a></div>
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

    
        
    <div class="col-xs-8">
        <div class="fh5co-narrow-content">
        <h1 class="fh5co-heading-colored"><strong>CREATE A GROUP</strong></h1>
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

        </div>
 
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

