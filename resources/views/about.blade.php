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
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Modal  -->
	<link href="{{asset('/css/modal.css')}}" rel="stylesheet">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="/">楽友</a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li><a href="/">MY PAGE</a></li>
					<li><a href="/groups">CATEGORY LIST</a></li>
					<li><a id="modal-open" class="button-link">CREATE A GROUP</a></li>
					<li class="fh5co-active"><a href="/about">About</a></li>
					<li><a href="/logout">LOG OUT</a></li>
				</ul>
			</nav>

			

		</aside>
		
        <div id="fh5co-main">
			<div class="fh5co-narrow-content2">
				<div class="row row-bottom-padded-md">
					<div id="learnmore">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<img class="img-responsive" src="images/back.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
						</div>
						<div class="col-xs-6 animate-box" data-animate-effect="fadeInLeft">
						
						<h2 class="fh5co-heading2">こんなこと、感じたことありませんか？</h2>
						<ul>	
						<li>月曜の夜が暇だな…</li>
						<li>朝と夜にぼっち飯したくない時もある！</li>
						<li>自分の趣味について語れる同期がいない！</li>
						<li>もっといろんな同期と飲みたい！</li>
						</ul>
						
						<p><strong>これらの悩み、楽友を作って解決しよう！！！</strong></p>
						</div>
					</div>
				</div>
				

						
					 <div id="about">
					 	<h1 class="fh5co-heading-colored"><strong>ABOUT THIS SERVICE</strong></h1>
								<div class="row">
						               <p class="ayu">よっ友から楽友になるには？？</p>
						               <p class="toy">楽友とは、気軽に暇つぶしや飲み会に誘える！更に、その絆が新たなビジネスへと繋がる仲間です！</p>
								</div>

					
					
							<div class="row">
								<div class="col-md-6">
									<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
										<div class="fh5co-icon">
											<i class="icon-search4"></i>
										</div>
										<div class="fh5co-text">
											<h3>「楽友」を見つけよう！</h3>
											<p><strong>グループに参加して同期の意外な一面を発見できる！</strong> </p>
											<a class="btn btn-primary btn-demo popup-vimeo" href="/groups"> <i class="icon-search4"></i>グループ・イベントを<strong>見つける</strong></a>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
										<div class="fh5co-icon">
											<i class="icon-plus"></i>
										</div>
										<div class="fh5co-text">
											<h3>「楽友」の輪を広げよう！</h3>
											<p><strong>輪と輪が交差し、263人と繋がれる！</strong></p>
											<a class="btn btn-primary btn-demo popup-vimeo" href="/groups/create"> <i class="icon-plus"></i>グループ・イベントを<strong>つくる</strong></a>
										</div>
									</div>
								</div>
							</div>
					</div>
			</div>
		</div>
		
		
		
		
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
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Modal -->
	<script src="{{asset('/js/modal.js')}}"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>