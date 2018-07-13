@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
          
        </aside>
        <div class="col-xs-8">
     @if(is_null($profile)) {!! Form::model($profile, ['route' => 'users.store', 'method' => 'post', 'files' => true]) !!}
          
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
        
@endsection