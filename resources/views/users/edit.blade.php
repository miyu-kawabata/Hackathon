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
					<li class="fh5co-active"><a href="/">MY PAGE</a></li>
					<li><a href="/groups">CATEGORY LIST</a></li>
					<li><a id="modal-open" class="button-link">CREATE A GROUP</a></li>
					<li><a href="/logout">LOG OUT</a></li>
				</ul>
			</nav>
		</aside>
		</div>

        <aside class="col-xs-4" style="margin-top:50px">
          
        </aside>
        <div class="col-xs-8" style="margin-top:50px">
            @if (count($errors) > 0)
		<h2>マイページの作成に失敗しました。</h2>
    @foreach ($errors->all() as $error)
        <div class="alert alert-warning">{{ $error }}</div>
    @endforeach
@endif
            
    @if(is_null($profile))
            {!! Form::model($profile, ['route' => 'users.store', 'method' => 'post', 'files' => true]) !!}
          

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
                    {!! Form::text('comment',null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                {!! Form::label('file', '画像アップロード※', ['class' => 'control-label']) !!}
                {!! Form::file('file') !!}
                </div>


       
                 {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
        
                 {!! Form::close() !!}
                 {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                        {!! Form::submit('アカウント削除', ['class' => 'btn btn-danger2 btn-xs']) !!}
                　{!! Form::close() !!}
            
            
            
    @else
            {!! Form::model($profile, ['route' => ['users.update', $profile->id], 'method' => 'put', 'files' => true]) !!}
            
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
                    {!! Form::text('comment',null, ['class' => 'form-control']) !!}
                </div>
                
                
                
                
                <div class="form-group">
    
    {!! Form::label('file', '画像アップロード※', ['class' => 'control-label']) !!}
    {!! Form::file('file') !!}
</div>

        
               
        
                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
            
            {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                        {!! Form::submit('アカウント削除', ['class' => 'btn btn-danger2 btn-xs']) !!}
            {!! Form::close() !!}
  @endif          
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
                    
                    
                    {!! Form::radio('category', '映画鑑賞') !!}
                    {!! Form::label('category', '映画鑑賞 / ') !!}
                    
                    
                    {!! Form::radio('category', 'その他') !!}
                    {!! Form::label('category', 'その他 / ') !!}
                    
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
            {!! Form::label('file', '画像アップロード※', ['class' => 'control-label']) !!}
            {!! Form::file('file',old('file'),['class' => 'form-control']) !!}
            </div>
            
               {!! Form::submit ('SUBMIT',['class' =>'btn btn-primary']) !!}

            {!! Form::close() !!}

	<p><a id="modal-close" class="button-link">閉じる</a></p>
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
	<!-- Modal-->
    <script src="../../../js/modal.js"></script>
	
	<!-- MAIN JS -->
	<script src="../../../js/main.js"></script>

        </body>
        
        </html>