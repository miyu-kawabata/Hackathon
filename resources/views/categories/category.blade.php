@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">カテゴリー:test</h3>
                </div>
                <div class="panel-body">
                 @foreach ($groups as $group)
                    <ul>
                        <li>{!! link_to_route('groups.show',  $group->groupname, ['id' => $group->id])!!}</li>
                    </ul>
                 @endforeach
                  
                </div>
            </div>
            
        </aside>
        <div class="col-xs-8">
            
            
        </div>
    </div>
@endsection