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
					<li><a id="modal-open" class="button-link">CREATE GROUP</a></li>
					<li><a href="/logout">LOG OUT</a></li>
				</ul>
			</nav>
		</aside>


			</aside>
			
	
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
	
	
	<!-- MAIN JS -->
	<script src="../../../js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>

        <aside class="col-xs-4">
          
        </aside>
        <div class="col-xs-8">
     @if(is_null($profile)) {!! Form::model($profile, ['route' => 'users.store', 'method' => 'post', 'files' => true]) !!}
          

                <div class="form-group">
                    {!! Form::label('sex', '性別:') !!}
                    {!! Form::label('sex', '男性:') !!}
                    {!! Form::radio('sex', '男性') !!}
                    {!! Form::label('sex', '女性:') !!}
                    {!! Form::radio('sex', '女性') !!}
                </div>
                <div class="form-group">
                    {!! Form::label('hometown', '出身:') !!}
                    　　　　　　　　　　　　
{{ Form::select('hometown', array(
 '' =>  '都道府県を選択して下さい',
  '1' => '北海道', 
  '2' => '青森県', 
  '3' => '岩手県', 
  '4' => '宮城県',
  '5' => '秋田県', 
  '6' => '山形県', 
  '7' => '福島県', 
  '8' => '茨城県',
  '9' => '栃木県', 
  '10' => '群馬県', 
  '11' => '埼玉県', 
  '12' => '千葉県',
  '13' => '東京都', 
  '14' => '神奈川県', 
  '15' => '新潟県', 
  '16' => '富山県',
  '17' => '石川県', 
  '18' => '福井県', 
  '19' => '山梨県', 
  '20' => '長野県', 
  '21' => '岐阜県', 
  '22' => '静岡県', 
  '23' => '愛知県', 
  '24' => '三重県',
  '25' => '滋賀県', 
  '26' => '京都府', 
  '27' => '大阪府', 
  '28' => '兵庫県',
  '29' => '奈良県', 
  '30' => '和歌山県', 
  '31' => '鳥取県', 
  '32' => '島根県',
  '33' => '岡山県', 
  '34' => '広島県', 
  '35' => '山口県', 
  '36' => '徳島県',
  '37' => '香川県',
  '38' => '愛媛県',
  '39' => '高知県', 
  '40' => '福岡県',
  '41' => '佐賀県', 
  '42' => '長崎県', 
  '43' => '熊本県', 
  '44' => '大分県',
  '45' => '宮崎県', 
  '46' => '鹿児島県', 
  '47' => '沖縄県',
  '48' => 'その他'
))}}
　　　
　　　
　　　　　　　　　　　　　　　　　　　　　　
                </div>
                
                <div class="form-group">
                    {!! Form::label('hobbies', '趣味:') !!}
                    {!! Form::text('hobbies', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('comment', '何か一言:') !!}
                    {!! Form::text('comment', null, ['class' => 'form-control']) !!}
                </div>
                
                
       
       <div class="form-group">
    @if ($user->avatar_filename)
        <p>
            <img src="{{ asset('storage/images/' . $user->avatar_filename) }}" alt="avatar" />
        </p>
    @endif
    {!! Form::label('file', '画像アップロード', ['class' => 'control-label']) !!}
    {!! Form::file('file') !!}
</div>


       
         {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
        
            {!! Form::close() !!}
            
            @else {!! Form::model($profile, ['route' => ['users.update', $profile->id], 'method' => 'put', 'files' => true]) !!}
            
                <div class="form-group">
                    {!! Form::label('sex', '性別:') !!}
                    {!! Form::label('sex', '男性:') !!}
                    {!! Form::radio('sex', '男性') !!}
                    {!! Form::label('sex', '女性:') !!}
                    {!! Form::radio('sex', '女性') !!}
                </div>
                <div class="form-group">
                    {!! Form::label('hometown', '出身:') !!}
                    　　　　　　　　　　　　
{{ Form::select('hometown', array(
 '' =>  '都道府県を選択して下さい',
  '1' => '北海道', 
  '2' => '青森県', 
  '3' => '岩手県', 
  '4' => '宮城県',
  '5' => '秋田県', 
  '6' => '山形県', 
  '7' => '福島県', 
  '8' => '茨城県',
  '9' => '栃木県', 
  '10' => '群馬県', 
  '11' => '埼玉県', 
  '12' => '千葉県',
  '13' => '東京都', 
  '14' => '神奈川県', 
  '15' => '新潟県', 
  '16' => '富山県',
  '17' => '石川県', 
  '18' => '福井県', 
  '19' => '山梨県', 
  '20' => '長野県', 
  '21' => '岐阜県', 
  '22' => '静岡県', 
  '23' => '愛知県', 
  '24' => '三重県',
  '25' => '滋賀県', 
  '26' => '京都府', 
  '27' => '大阪府', 
  '28' => '兵庫県',
  '29' => '奈良県', 
  '30' => '和歌山県', 
  '31' => '鳥取県', 
  '32' => '島根県',
  '33' => '岡山県', 
  '34' => '広島県', 
  '35' => '山口県', 
  '36' => '徳島県',
  '37' => '香川県',
  '38' => '愛媛県',
  '39' => '高知県', 
  '40' => '福岡県',
  '41' => '佐賀県', 
  '42' => '長崎県', 
  '43' => '熊本県', 
  '44' => '大分県',
  '45' => '宮崎県', 
  '46' => '鹿児島県', 
  '47' => '沖縄県',
  '48' => 'その他'
))}}
　　　
　　　　　　　　　　　　　　　　　　　　　　
                </div>
                
            <div class="form-group">
                    {!! Form::label('hobbies', '趣味:') !!}
                    {!! Form::text('hobbies', null, ['class' => 'form-control']) !!}
                </div>

            <div class="form-group">
                    {!! Form::label('comment', '何か一言:') !!}
                    {!! Form::text('comment', null, ['class' => 'form-control']) !!}
                </div>
                
                
                
                
                <div class="form-group">
    @if ($user->avatar_filename)
        <p>
            <img src="{{ asset('storage/images/' . $user->avatar_filename) }}" alt="avatar" />
        </p>
    @endif
    {!! Form::label('file', '画像アップロード', ['class' => 'control-label']) !!}
    {!! Form::file('file') !!}
</div>

        
               
        
                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
        
            {!! Form::close() !!}
  @endif          
        </div>
        </div>
        		<div class="col-xs-8">
          	<div id="modal-content">
        <div class="col-xs-6">
            
            
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

        </div>
	<p><a id="modal-close" class="button-link">閉じる</a></p>
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
	<!-- Modal-->
    <script src="../../../js/modal.js"></script>
	
	<!-- MAIN JS -->
	<script src="../../../js/main.js"></script>

        </body>
        
        </html>