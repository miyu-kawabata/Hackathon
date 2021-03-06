<div id="modal-content">
	<!-- モーダルウィンドウのコンテンツ開始 -->
<div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                </div>
                <div class="panel-body">
                
                </div>
            </div>
            
        </aside>
        <div class="col-xs-8">
            
            
        {!! Form::model($group, ['route' => 'groups.store','method' => 'post', 'files' => true]) !!}
        
             
            <div class="form-group">
                 {!! Form::label ('groupname','グループ名') !!}
                 {!! Form::text ('groupname',null,['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                 
                  {!! Form::label('category', 'カテゴリー:') !!}
                    {!! Form::label('category', 'スポーツ:') !!}
                    {!! Form::radio('category', 'スポーツ') !!}
                    {!! Form::label('category', 'グルメ:') !!}
                    {!! Form::radio('category', 'グルメ') !!}
                    {!! Form::label('category', '音楽:') !!}
                    {!! Form::radio('category', '音楽') !!}
                    {!! Form::label('category', '美容:') !!}
                    {!! Form::radio('category', '美容') !!}
                    {!! Form::label('category', 'ファッション:') !!}
                    {!! Form::radio('category', 'ファッション') !!}
            </div>
            
            
            <div class="form-group">
                 {!! Form::label ('date','開催日') !!}
                 {!! Form::text ('date',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                 {!! Form::label ('description','詳細') !!}
                 {!! Form::text ('description',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
            {!! Form::label('file', '画像アップロード', ['class' => 'control-label']) !!}
            {!! Form::file('file') !!}
            </div>
            
               {!! Form::submit ('投稿',['class' =>'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
        
        <div>
        </div>
    </div>
	<p><a id="modal-close" class="button-link">閉じる</a></p>
	<!-- モーダルウィンドウのコンテンツ終了 -->
