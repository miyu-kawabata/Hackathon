@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            
            
        </aside>
        <div class="col-xs-8">
            {!! Form::model($group, ['route' => ['groups.update', $group->id], 'method' => 'put', 'files' => true]) !!}
             <div class="form-group">
                 {!! Form::label ('groupname','グループ名') !!}
                 {!! Form::text ('groupname',null,['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                
                   {!! Form::label('category', 'CATEGORY') !!} 
            </div>   
            
            <div class="form-group">
                 
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
            {!! Form::file('file',old('file')) !!}
            </div>
            
               {!! Form::submit ('SUBMIT',['class' =>'btn btn-primary']) !!}
                   {!! Form::close() !!}
                {!! Form::open(['route' => ['groups.destroy', $group->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
            {!! Form::close() !!}

        </div>
    </div>
@endsection