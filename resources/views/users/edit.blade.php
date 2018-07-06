@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
          
        </aside>
        <div class="col-xs-8">
     @if(is_null($profile)) {!! Form::model($profile, ['route' => 'users.store', 'method' => 'post']) !!}
          
<div class="form-group">
                    {!! Form::label('comment', '何か一言:') !!}
                    {!! Form::text('comment', null, ['class' => 'form-control']) !!}
                </div>
       
       
       
         {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
        
            {!! Form::close() !!}
            
            @else {!! Form::model($profile, ['route' => ['users.update', $profile->id], 'method' => 'put']) !!}
            
            <div class="form-group">
                    {!! Form::label('comment', '何か一言:') !!}
                    {!! Form::text('comment', null, ['class' => 'form-control']) !!}
                </div>
        
               
        
                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
        
            {!! Form::close() !!}
  @endif          
        </div>
        </div>
        
@endsection