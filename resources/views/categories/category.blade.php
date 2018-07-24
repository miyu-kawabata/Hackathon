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
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="../css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">
	
	<link rel="stylesheet" href="../css/themify-icons.css">
	
	<link href="../css/modal.css" rel="stylesheet">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	
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

			<h1 id="fh5co-logo"><a href="/">楽友</a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li><a href="/">MY PAGE</a></li>
					<li class="fh5co-active"><a href="/groups">CATEGORY LIST</a></li>
					<li><a id="modal-open" class="button-link">CREATE A GROUP</a></li>
					<li><a href="/about">About</a></li>
					<li><a href="/logout">LOG OUT</a></li>
				</ul>
			</nav>
		</aside>
		
	<div id="fh5co-main">
		@if (count($errors) > 0)
		<h2>グループの作成に失敗しました( *´艸｀)</h2>
    @foreach ($errors->all() as $error)
        <div class="alert alert-warning">{{ $error }}</div>
    @endforeach
@endif
   		<div class="fh5co-narrow-content">
			    <div class="prev">
	<header class="sample01">
              <tomo>
                    <li style="font-weight:bold"><a href="#">CATEGORY LIST <span>◀</span></a>
                          <ul>
                                <li><a href="#cafeteria">カフェテリアでご飯</a></li>
                                <li><a href="#breaktime">休憩時間</a></li>
                                <li><a href="#kataru">好きなモノについて語る会</a></li>
                                <li><a href="#nomikai">飲み会</a></li>
                                <li><a href="#sports">スポーツ</a></li>
                                <li><a href="#food">グルメ</a></li>
                                <li><a href="#outdoor">アウトドア</a></li>
                                <li><a href="#movie">映画鑑賞</a></li>
                                <li><a href="#other">その他</a></li>
                          </ul>
                    </li>
             </tomo>
      </header>
          
		 	
		    </div>
		    
		  
		    
		    
		    
			    
			    
		    <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><a name="cafeteria">カフェテリアでごはん</a></h2>
		
			<div class="gtco-section">
				<div class="gtco-container">
					<div class="row">

					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							@foreach($cafeterias as $cafeteria)
							<div class="item">
								<div class="blog-entry">
									<a href="/groups/{{$cafeteria->id}}" class="blog-img"><img class="media-object img-rounded img-responsive" src="{{ $cafeteria->group_picture }}" alt="写真を挿入"></a>
									<div class="desc">
										<div class="description">
											<h2>{!! link_to_route('groups.show',  $cafeteria->groupname, ['id' => $cafeteria->id])!!}</h2>
											<span>{{ $cafeteria->year }}/{{ $cafeteria->month }}/{{ $cafeteria->date }}</span>
											<span>場所:{{ $cafeteria->place }}</span>
											<span>{{ $cafeteria->description }}</span>
										</div>
										<a href="/groups/{{$cafeteria->id}}" class="btnn btn-primary btn-md" >View</a>
									</div>
								</div>
							</div>
							@endforeach
                            
						</div>
					</div>
					</div>
				</div>
			</div>	    
			
		
			
			
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><a name="breaktime">休憩時間</a></h2>
			<div class="gtco-section">
				<div class="gtco-container">
					<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							@foreach($breaktimes as $breaktime)
							<div class="item">
								<div class="blog-entry">
									<a href="/groups/{{$breaktime->id}}" class="blog-img"><img class="media-object img-rounded img-responsive" src="{{ $breaktime->group_picture }}" alt="写真を挿入"></a>
									<div class="desc">
										<div class="description">
											<h2>{!! link_to_route('groups.show',  $breaktime->groupname, ['id' => $breaktime->id])!!}</h2>
											<span>{{ $breaktime->year }}/{{ $breaktime->month }}/{{ $breaktime->date }}</span>
											<span>場所:{{ $breaktime->place }}</span>
											<span>{{ $breaktime->description }}</span>
										</div>
										<a href="/groups/{{$breaktime->id}}" class="btnn btn-primary btn-md" >View</a> 
									</div>
								</div>
							</div>
							@endforeach
                            
						</div>
					</div>
					</div>
				</div>
			</div>	    
			    
			    
			    
    
			<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><a name="kataru">好きなモノについて語る会</a></h2>
			<div class="gtco-section">
				<div class="gtco-container">
					<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							@foreach($katarus as $kataru)
							<div class="item">
								<div class="blog-entry">
									<a href="/groups/{{$kataru->id}}" class="blog-img"><img class="media-object img-rounded img-responsive" src="{{ $kataru->group_picture }}" alt="写真を挿入"></a>
									<div class="desc">
										<div class="description">
											<h2>{!! link_to_route('groups.show',  $kataru->groupname, ['id' => $kataru->id])!!}</h2>
											<span>{{ $kataru->year }}/{{ $kataru->month }}/{{ $kataru->date }}</span>
											<span>場所:{{ $kataru->place }}</span>
											<span>{{ $kataru->description }}</span>
										</div>
										<a href="/groups/{{$kataru->id}}" class="btnn btn-primary btn-md" >View</a>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					</div>
				</div>
			</div>
			
			
			<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><a name='nomikai'>飲み会</a></h2>
			<div class="gtco-section">
				<div class="gtco-container">
					<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							@foreach($nomikais as $nomikai)
							<div class="item">
								<div class="blog-entry">
									<a href="/groups/{{$nomikai->id}}" class="blog-img"><img class="media-object img-rounded img-responsive" src="{{ $nomikai->group_picture }}" alt="写真を挿入"></a>
									<div class="desc">
										<div class="description">
											<h2>{!! link_to_route('groups.show',  $nomikai->groupname, ['id' => $nomikai->id])!!}</h2>
											<span>{{ $nomikai->year }}/{{ $nomikai->month }}/{{ $nomikai->date }}</span>
											<span>場所:{{ $nomikai->place }}</span>
											<span>{{ $nomikai->description }}</span>
										</div>
									<a href="/groups/{{$nomikai->id}}" class="btnn btn-primary btn-md" >View</a> 
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					</div>
				</div>
			</div>
			
			
		<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><a name='sports'>スポーツ</a></h2>
		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							@foreach($sports as $sport)
							<div class="item">
								<div class="blog-entry">
									<a href="/groups/{{$sport->id}}" class="blog-img"><img class="media-object img-rounded img-responsive" src="{{ $sport->group_picture }}" alt="写真を挿入"></a>
									<div class="desc">
										<div class="description">
											<h2>{!! link_to_route('groups.show',  $sport->groupname, ['id' => $sport->id])!!}</h2>
											<span>{{ $sport->year }}/{{ $sport->month }}/{{ $sport->date }}</span>
											<span>場所:{{ $sport->place }}</span>
											<span>{{ $sport->description }}</span>
										</div>
										<a href="/groups/{{$sport->id}}" class="btnn btn-primary btn-md" >View</a>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
			
			
		
		
		<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><a name='food'>グルメ</a></h2>
		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							@foreach($foods as $food)
							<div class="item">
								<div class="blog-entry">
									<a href="/groups/{{$food->id}}" class="blog-img"><img class="media-object img-rounded img-responsive" src="{{ $food->group_picture }}" alt="写真を挿入"></a>
									<div class="desc">
										<div class="description">
											<h2>{!! link_to_route('groups.show',  $food->groupname, ['id' => $food->id])!!}</h2>
											<span>{{ $food->year }}/{{ $food->month}}/{{ $food->date }}</span>
											<span>場所:{{ $food->place }}</span>
											<span>{{ $food->description }}</span>
										</div>
									<a href="/groups/{{$food->id}}" class="btnn btn-primary btn-md" >View</a> 
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>

							

	<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><a name='outdoor'>アウトドア</a></h2>
		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							@foreach($outdoors as $outdoor)
							<div class="item">
								<div class="blog-entry">
									<a href="/groups/{{$outdoor->id}}" class="blog-img"><img class="media-object img-rounded img-responsive" src="{{ $outdoor->group_picture }}" alt="写真を挿入"></a>
									<div class="desc">
										<div class="description">
											<h2>{!! link_to_route('groups.show',  $outdoor->groupname, ['id' => $outdoor->id])!!}</h2>
											<span>{{ $outdoor->year }}/{{ $outdoor->month }}/{{ $outdoor->date }}</span>
											<span>場所:{{ $outdoor->place }}</span>
											<span>{{ $outdoor->description }}</span>
										</div>
										<a href="/groups/{{$outdoor->id}}" class="btnn btn-primary btn-md" >View</a> 
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		
			<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><a name='movie'>映画鑑賞</a></h2>
		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							@foreach($movies as $movie)
							<div class="item">
								<div class="blog-entry">
									<a href="/groups/{{$movie->id}}" class="blog-img"><img class="media-object img-rounded img-responsive" src="{{ $movie->group_picture }}" alt="写真を挿入"></a>
									<div class="desc">
										<div class="description">
											<h2>{!! link_to_route('groups.show',  $movie->groupname, ['id' => $movie->id])!!}</h2>
											<span>{{ $movie->year }}/{{ $movie->month }}/{{ $movie->date }}</span>
											<span>場所:{{ $movie->place }}</span>
											<span>{{ $movie->description }}</span>
										</div>
										<a href="/groups/{{$movie->id}}" class="btnn btn-primary btn-md" >View</a> 
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><a name='other'>その他</h2></a>
		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							@foreach($others as $other)
							<div class="item">
								<div class="blog-entry">
									<a href="/groups/{{$other->id}}" class="blog-img"><img class="media-object img-rounded img-responsive" src="{{ $other->group_picture }}" alt="写真を挿入"></a>
									<div class="desc">
										<div class="description">
											<h2>{!! link_to_route('groups.show',  $other->groupname, ['id' => $other->id])!!}</h2>
											<span>{{ $other->year }}/{{ $other->month }}/{{ $other->date }}</span>
											<span>場所:{{ $other->place }}</span>
											<span>{{ $other->description }}</span>
										</div>
										<a href="/groups/{{$other->id}}" class="btnn btn-primary btn-md" >View</a>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>	
		
		<div class="col-xs-8">
          	<div id="modal-content">
            
        	{!! Form::model($group, ['route' => 'groups.store','method' => 'post', 'files' => true]) !!}
            {!! Form::model($group, ['route' => 'groups.store']) !!}
        
             
            <div class="form-group">
                 {!! Form::label ('groupname','グループ名※') !!}
                 {!! Form::text ('groupname',null,['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                   {!! Form::label('category', 'カテゴリー※') !!} 
            </div>       
                   
                   <div class="form-group">
                   	{!! Form::label('category', 'カフェテリア') !!}
                   	{!! Form::radio('category', 'カフェテリア') !!}
                   	{!! Form::label('category', ' / 休憩時間') !!}
                    {!! Form::radio('category', '休憩時間') !!}
                    {!! Form::label('category', ' / おしゃべり') !!}
                    {!! Form::radio('category', 'おしゃべり') !!}
                    {!! Form::label('category', ' / 飲み会') !!}
                    {!! Form::radio('category', '飲み会') !!}
                    {!! Form::label('category', ' / スポーツ') !!}
                    {!! Form::radio('category', 'スポーツ') !!}
                    {!! Form::label('category', ' / グルメ') !!}
                    {!! Form::radio('category', 'グルメ') !!}
                    {!! Form::label('category', ' / アウトドア') !!}
                    {!! Form::radio('category', 'アウトドア') !!}
                    {!! Form::label('category', ' / 映画鑑賞') !!}
                    {!! Form::radio('category', '映画') !!}
                    {!! Form::label('category', ' / その他') !!}
                    {!! Form::radio('category', 'その他') !!}
                    
                    </div>
            
            <div class="form-group">
                   {!! Form::label('category', '開催日時※') !!} 
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
                 {!! Form::label ('place','開催場所※') !!}
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
            

	<h6><a id="modal-close" class="button-link">閉じる</a></h6>
</div>
        </div>
	</div>

		
							
							
							
					
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
	
	<!-- Carousel -->
	<script src="../js/owl.carousel.min.js"></script>
	
	<!-- Modal -->
	<script src="../js/modal.js"></script>
	
	<!-- MAIN JS -->
	<script src="../js/main.js"></script>

	</body>
</html>