
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

			<h1 id="fh5co-logo"><a href="/">Hackathon</a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li class="fh5co-active"><a href="/">MY PAGE</a></li>
					<li><a href="/groups">CATEGORY</a></li>
					<li><a href="/groups/create">CREATE GROUP</a></li>
					<li><a href="/logout">LOG OUT</a></li>
				</ul>
			</nav>
		</aside>
		
		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
			    <h1>Category</h1>
    
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">nomikai</h2>
				<div class="render">
				<div class="row row-bottom-padded-md">
			    	@foreach ($nomikais as $nomikai)
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="/groups/{{$nomikai->id}}" class="blog-img"><img src="images/mike.jpg" class="img-responsive" alt="mike"></a>
							<div class="desc">
								<h3>{!! link_to_route('groups.show',  $nomikai->groupname, ['id' => $nomikai->id])!!}</h3>
								<span><i class="icon-comment"><small>{{ $nomikai->date }}</small></i></span>
								<p>{{ $nomikai->description }}</p>
                                <h2 class="lead"> {!! link_to_route('groups.show',  'see more', ['id' => $nomikai->id])!!}<i class="icon-arrow-right3"></i></h2>
							</div>
						</div>
					</div>
				   @endforeach
				  </div>
				  {!! $nomikais->render() !!}
				  </div>
				
				
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">food</h2>
				<div class="render">
				<div class="row row-bottom-padded-md">
				@foreach ($foods as $food)
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="/groups/{{$food->id}}" class="blog-img"><img src="images/img-1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							<div class="desc">
								<h3> {!! link_to_route('groups.show',  $food->groupname, ['id' => $food->id])!!}</h3>
								<span><i class="icon-comment"><small>{{ $food->date }}</small></i></span>
								<p>{{ $food->description }}</p>
                                <h2 class="lead"> {!! link_to_route('groups.show',  'see more', ['id' => $food->id])!!}<i class="icon-arrow-right3"></i></h2>
							</div>
						</div>
					</div>
				 @endforeach
				</div>
				{!! $foods->render() !!}
				</div>
				
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">sports</h2>
				<div class="render">
				<div class="row row-bottom-padded-md">
				@foreach ($sports as $sport)
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="/groups/{{$sport->id}}" class="blog-img"><img src="images/img-1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							<div class="desc">
								<h3>{!! link_to_route('groups.show',  $sport->groupname, ['id' => $sport->id])!!}</h3>
								<span><i class="icon-comment"><small>{{ $sport->date }}</small></i></span>
								<p>{{ $sport->description }}</p>
                                <h2 class="lead">{!! link_to_route('groups.show', 'see more', ['id' => $sport->id])!!}<i class="icon-arrow-right3"></i></h2>
							</div>
						</div>
					</div>
				 @endforeach
				</div>
				{!! $sports->render() !!}
				</div>
				
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">career</h2>
				<div class="render">
				<div class="row row-bottom-padded-md">
				@foreach ($careers as $career)
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="/groups/{{$career->id}}" class="blog-img"><img src="images/img-1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							<div class="desc">
								<h3>{!! link_to_route('groups.show',  $career->groupname, ['id' => $career->id])!!}</h3>
								<span><i class="icon-comment"><small>{{ $career->date }}</small></i></span>
								<p>{{ $career->description }}</p>
                                <h2 class="lead">{!! link_to_route('groups.show',  'see more', ['id' => $career->id])!!}<i class="icon-arrow-right3"></i></h2>
							</div>
						</div>
					</div>
				 @endforeach
				</div>
				{!! $careers->render() !!}
				</div>
				
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">shopping</h2>
				<div class="render">
				<div class="row row-bottom-padded-md">
				@foreach ($shoppings as $shopping)
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="/groups/{{$shopping->id}}" class="blog-img"><img src="images/img-1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							<div class="desc">
								<h3>{!! link_to_route('groups.show',  $shopping->groupname, ['id' => $shopping->id])!!}</h3>
								<span><i class="icon-comment"><small>{{ $shopping->date }}</small></i></span>
								<p>{{ $shopping->description }}</p>
                                <h2 class="lead">{!! link_to_route('groups.show', 'see more', ['id' => $shopping->id])!!}<i class="icon-arrow-right3"></i></h2>
							</div>
						</div>
					</div>
				 @endforeach
				</div>
				{!! $shoppings->render() !!}
				</div>
				
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">movie</h2>
				<div class="render">
				<div class="row row-bottom-padded-md">
				@foreach ($movies as $movie)
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="/groups/{{$movie->id}}" class="blog-img"><img src="images/img-1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							<div class="desc">
								<h3>{!! link_to_route('groups.show',  $movie->groupname, ['id' => $movie->id])!!}</h3>
								<span><i class="icon-comment"><small>{{ $movie->date }}</small></i></span>
								<p>{{ $movie->description }}</p>
                                <h2 class="lead">{!! link_to_route('groups.show',  'see more', ['id' => $movie->id])!!}<i class="icon-arrow-right3"></i></h2>
							</div>
						</div>
					</div>
				 @endforeach
				</div>
				{!! $movies->render() !!}
				</div>
				
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">outdoor</h2>
				<div class="render">
				<div class="row row-bottom-padded-md">
				@foreach ($outdoors as $outdoor)
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="/groups/{{$outdoor->id}}" class="blog-img"><img src="images/img-1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							<div class="desc">
								<h3>{!! link_to_route('groups.show',  $outdoor->groupname, ['id' => $outdoor->id])!!}</h3>
								<span><i class="icon-comment"><small>{{ $outdoor->date }}</small></i></span>
								<p>{{ $outdoor->description }}</p>
                                <h2 class="lead">{!! link_to_route('groups.show', 'see more', ['id' => $outdoor->id])!!}<i class="icon-arrow-right3"></i></h2>
							</div>
						</div>
					</div>
				 @endforeach
				</div>
				{!! $outdoors->render() !!}
				</div>
				
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">others</h2>
				<div class="render">
				<div class="row row-bottom-padded-md">
				@foreach ($others as $other)
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="/groups/{{$other->id}}" class="blog-img"><img src="images/img-1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							<div class="desc">
								<h3>{!! link_to_route('groups.show',  $other->groupname, ['id' => $other->id])!!}</h3>
								<span><i class="icon-comment"><small>{{ $other->date }}</small></i></span>
								<p>{{ $other->description }}</p>
								<h2 class="lead">{!! link_to_route('groups.show', 'See More', ['id' => $other->id])!!}<i class="icon-arrow-right3"></i></h2>
							</div>
						</div>
					</div>
				 @endforeach
				</div>
				{!! $others->render() !!}
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
	
	
	<!-- MAIN JS -->
	<script src="../js/main.js"></script>

	</body>
</html>
