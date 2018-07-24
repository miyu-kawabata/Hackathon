@if (Auth::user()->is_favoriting($groups->id))
        {!! Form::open(['route' => ['groups.unfavorite', $groups->id], 'method' => 'delete']) !!}
            {!! Form::submit('お気に入り中', ['class' => "btnn2 btn-danger btn-sm"]) !!}
        {!! Form::close() !!}
   @else
        {!! Form::open(['route' => ['groups.favorite', $groups->id]]) !!}
            {!! Form::submit('お気に入りする', ['class' => "btnn2 btn-primary btn-sm"]) !!}
        {!! Form::close() !!}
   @endif