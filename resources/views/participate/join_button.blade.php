@if (Auth::user()->is_joining($group->id))
        {!! Form::open(['route' => ['group.exit', $group->id], 'method' => 'delete']) !!}
            {!! Form::submit('Exit', ['class' => "btn btn-info btn-xs"]) !!}
        {!! Form::close() !!}
@else
        {!! Form::open(['route' => ['group.join', $group->id]]) !!}
            {!! Form::submit('Join', ['class' => "btn btn-default btn-xs"]) !!}
        {!! Form::close() !!}
@endif