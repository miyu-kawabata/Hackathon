@if (Auth::user()->is_favoriting($groups->id))
        {!! Form::open(['route' => ['groups.unfavorite', $groups->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
   @else
        {!! Form::open(['route' => ['groups.favorite', $groups->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
   @endif