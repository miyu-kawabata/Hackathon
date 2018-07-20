@if (Auth::user()->is_joining($group->id))
        {!! Form::open(['route' => ['group.exit', $group->id], 'method' => 'delete']) !!}
            {!! Form::submit('参加中', ['class' => "btnn btn-info btn-sm"]) !!}
        {!! Form::close() !!}
@else
        {!! Form::open(['route' => ['group.join', $group->id]]) !!}
            {!! Form::submit('参加する', ['class' => "btnn btn-default btn-sm"]) !!}
        {!! Form::close() !!}
@endif