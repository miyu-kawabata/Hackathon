@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <p>ここで写真を登録</p>  
                </div>
                <div class="panel-body">
                
                </div>
            </div>
            
        </aside>
        <div class="col-xs-6">
            
            
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
            
               {!! Form::submit ('SUBMIT',['class' =>'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
        
        <div>
        </div>
    </div>
@endsection