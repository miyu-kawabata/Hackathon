@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">カテゴリー:test</h1>
                </div>
                <div class="panel-body">
                
                   
                        <h3><li>sports</li></h3>
                        @foreach ($sports as $sport)
                        {!! link_to_route('groups.show',  $sport->groupname, ['id' => $sport->id])!!}
                 @endforeach
                        <h3><li>foods</li></h3>
                        @foreach ($foods as $food)
                        {!! link_to_route('groups.show',  $food->groupname, ['id' => $food->id])!!}
                 @endforeach
                        <h3><li>music</li></h3>
                        @foreach ($musics as $music)
                        {!! link_to_route('groups.show',  $music->groupname, ['id' => $music->id])!!}
                 @endforeach
                        <h3><li>cosmetics</li></h3>
                        @foreach ($cosmes as $cosme)
                        {!! link_to_route('groups.show',  $cosme->groupname, ['id' => $cosme->id])!!}
                 @endforeach
                        <h3><li>fashion</li></h3>
                @foreach ($fashions as $fashion)
                        {!! link_to_route('groups.show',  $fashion->groupname, ['id' => $fashion->id])!!}
                 @endforeach
                  
                </div>
            </div>
            
            
            
        </aside>
        <div class="col-xs-8">
            
            
        </div>
    </div>
@endsection