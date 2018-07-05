@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $group->groupname }}</h3>
                </div>
                <div class="panel-body">
                
                </div>
            </div>
            
        </aside>
        <div class="col-xs-8">
            
            <ul>
                <li>{{ $group->date }}</li>
                <li>{{ $group->description }}</li>
                @include('participate_button.join_button', ['user' => $user])
            </ul>
        </div>
    </div>
@endsection