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
	
	<link rel="stylesheet" href="../css/themify-icons.css">

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
			<div class="gtco-section">
				<div class="gtco-container">
					<div class="row">

					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							@foreach($nomikais as $nomikai)
							<div class="item">
								<div class="gtco-item">
									<a href="/groups/{{$nomikai->id}}" class="blog-img"><img src="images/img-1.jpg" class="img-responsive" alt="mike"></a>
									<h2>{!! link_to_route('groups.show',  $nomikai->groupname, ['id' => $nomikai->id])!!}</h2>
									<p class="role">{{ $nomikai->date }}</p>
									<p>{{ $nomikai->description }}</p>
								</div>
							</div>
							@endforeach

						</div>
					</div>
					</div>
				</div>
			</div>
		
		
		<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">food</h2>
		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">

					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							@foreach($foods as $food)
							<div class="item">
								<div class="gtco-item">
									<a href="/groups/{{$nomikai->id}}" class="blog-img"><img src="images/img-1.jpg" class="img-responsive" alt="mike"></a>
									<h2>{!! link_to_route('groups.show',  $food->groupname, ['id' => $food->id])!!}</h2>
									<p class="role">{{ $food->date }}</p>
									<p>{{ $food->description }}</p>
								</div>
							</div>
							@endforeach

						</div>
					</div>
				</div>
			</div>
		</div>

							
		<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">sports</h2>
		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">

					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							@foreach($sports as $sport)
							<div class="item">
								<div class="gtco-item">
									<a href="/groups/{{$nomikai->id}}" class="blog-img"><img src="images/img-1.jpg" class="img-responsive" alt="mike"></a>
									<h2>{!! link_to_route('groups.show',  $sport->groupname, ['id' => $sport->id])!!}</h2>
									<p class="role">{{ $sport->date }}</p>
									<p>{{ $sport->description }}</p>
								</div>
							</div>
							@endforeach

						</div>
					</div>
				</div>
			</div>
		</div>
		

		<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">career</h2>
		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">

					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							@foreach($careers as $career)
							<div class="item">
								<div class="gtco-item">
									<a href="/groups/{{$nomikai->id}}" class="blog-img"><img src="images/img-1.jpg" class="img-responsive" alt="mike"></a>
									<h2>{!! link_to_route('groups.show',  $career->groupname, ['id' => $career->id])!!}</h2>
									<p class="role">{{ $career->date }}</p>
									<p>{{ $career->description }}</p>
								</div>
							</div>
							@endforeach

						</div>
					</div>
				</div>
			</div>
		</div>
		
		<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">shopping</h2>
		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">

					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							@foreach($shoppings as $shopping)
							<div class="item">
								<div class="gtco-item">
									<a href="/groups/{{$nomikai->id}}" class="blog-img"><img src="images/img-1.jpg" class="img-responsive" alt="mike"></a>
									<h2>{!! link_to_route('groups.show',  $shopping->groupname, ['id' => $shopping->id])!!}</h2>
									<p class="role">{{ $shopping->date }}</p>
									<p>{{ $shopping->description }}</p>
								</div>
							</div>
							@endforeach

						</div>
					</div>
				</div>
			</div>
		</div>
		
		<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">movie</h2>
		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">

					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							@foreach($movies as $movie)
							<div class="item">
								<div class="gtco-item">
									<a href="/groups/{{$nomikai->id}}" class="blog-img"><img src="images/img-1.jpg" class="img-responsive" alt="mike"></a>
									<h2>{!! link_to_route('groups.show',  $movie->groupname, ['id' => $movie->id])!!}</h2>
									<p class="role">{{ $movie->date }}</p>
									<p>{{ $movie->description }}</p>
								</div>
							</div>
							@endforeach

						</div>
					</div>
				</div>
			</div>
		</div>
		
		<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">outdoor</h2>
		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">

					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							@foreach($outdoors as $outdoor)
							<div class="item">
								<div class="gtco-item">
									<a href="/groups/{{$nomikai->id}}" class="blog-img"><img src="images/img-1.jpg" class="img-responsive" alt="mike"></a>
									<h2>{!! link_to_route('groups.show',  $outdoor->groupname, ['id' => $outdoor->id])!!}</h2>
									<p class="role">{{ $outdoor->date }}</p>
									<p>{{ $outdoor->description }}</p>
								</div>
							</div>
							@endforeach

						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">others</h2>
		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">

					<div class="col-md-12">
						<div class="owl-carousel owl-carousel-carousel">
							@foreach($others as $other)
							<div class="item">
								<div class="gtco-item">
									<a href="/groups/{{$nomikai->id}}" class="blog-img"><img src="images/img-1.jpg" class="img-responsive" alt="mike"></a>
									<h2>{!! link_to_route('groups.show',  $other->groupname, ['id' => $other->id])!!}</h2>
									<p class="role">{{ $other->date }}</p>
									<p>{{ $other->description }}</p>
								</div>
							</div>
							@endforeach

						</div>
					</div>
				</div>
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
	
	
	<!-- MAIN JS -->
	<script src="../js/main.js"></script>

	</body>
</html>
