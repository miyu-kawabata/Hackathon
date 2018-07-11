@extends('layouts.app')

@section('content')
    <div class="row">
        
        
        <div class="col-xs-12">
            
                <div class="panel-heading">
                    <h1>CATEGORY</h1>
                </div>
                   
                        <h3><ul>nomikai</ul></h3>
                        <div class="col-xs-12">
                        @foreach ($nomikais as $nomikai)
                        <div class="col-xs-2">
                            <div class="panel panel-default"> 
                                <div class="panel-heading"> 
                                     <h3 class="panel-title">{!! link_to_route('groups.show',  $nomikai->groupname, ['id' => $nomikai->id])!!}</h3> 
                                </div> 
                                <div class="panel-body"> 
                                  <img class="logo" src="images/mike.jpg" alt="logo" >
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                 
                        
                        <h3><ul>foods</ul></h3>
                        <div class="col-xs-12">
                        @foreach ($foods as $food)
                        <div class="col-xs-2">
                            <div class="panel panel-default"> 
                                <div class="panel-heading"> 
                                     <h3 class="panel-title"> {!! link_to_route('groups.show',  $food->groupname, ['id' => $food->id])!!}</h3> 
                                </div> 
                                <div class="panel-body"> 
                                  <img class="logo" src="images/mike.jpg" alt="logo" >
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                        
                        <h3><ul>sports</ul></h3>
                        <div class="col-xs-12">
                        @foreach ($sports as $sport)
                         <div class="col-xs-2">
                            <div class="panel panel-default"> 
                                <div class="panel-heading"> 
                                     <h3 class="panel-title">{!! link_to_route('groups.show',  $sport->groupname, ['id' => $sport->id])!!}</h3> 
                                </div> 
                                <div class="panel-body"> 
                                  <img class="logo" src="images/mike.jpg" alt="logo" >
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                         
                         
                        <h3><ul>career</ul></h3>
                        <div class="col-xs-12">
                        @foreach ($careers as $career)
                        <div class="col-xs-2">
                            <div class="panel panel-default"> 
                                <div class="panel-heading"> 
                                     <h3 class="panel-title">{!! link_to_route('groups.show',  $career->groupname, ['id' => $career->id])!!}</h3> 
                                </div> 
                                <div class="panel-body"> 
                                  <img class="logo" src="images/mike.jpg" alt="logo" >
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                         
                        <h3><ul>shopping</ul></h3>
                        <div class="col-xs-12">
                        @foreach ($shoppings as $shopping)
                        <div class="col-xs-2">
                            <div class="panel panel-default"> 
                                <div class="panel-heading"> 
                                     <h3 class="panel-title">{!! link_to_route('groups.show',  $shopping->groupname, ['id' => $shopping->id])!!}</h3> 
                                </div> 
                                <div class="panel-body"> 
                                  <img class="logo" src="images/mike.jpg" alt="logo" >
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div> 
                         
                         <h3><ul>movie</ul></h3>
                         <div class="col-xs-12">
                         @foreach ($movies as $movie)
                         <div class="col-xs-2">
                            <div class="panel panel-default"> 
                                <div class="panel-heading"> 
                                     <h3 class="panel-title">{!! link_to_route('groups.show',  $movie->groupname, ['id' => $movie->id])!!}</h3> 
                                </div> 
                                <div class="panel-body"> 
                                  <img class="logo" src="images/mike.jpg" alt="logo" >
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div> 
                         
                         <h3><ul>outdoor</ul></h3>
                         <div class="col-xs-12">
                        @foreach ($outdoors as $outdoor)
                        <div class="col-xs-2">
                            <div class="panel panel-default"> 
                                <div class="panel-heading"> 
                                     <h3 class="panel-title"> {!! link_to_route('groups.show',  $outdoor->groupname, ['id' => $outdoor->id])!!}</h3> 
                                </div> 
                                <div class="panel-body"> 
                                  <img class="logo" src="images/mike.jpg" alt="logo" >
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                         
                        <h3><ul>others</ul></h3>
                        <div class="col-xs-12">
                        @foreach ($others as $other)
                        <div class="col-xs-2">
                            <div class="panel panel-default"> 
                                <div class="panel-heading"> 
                                     <h3 class="panel-title">{!! link_to_route('groups.show',  $other->groupname, ['id' => $other->id])!!}</h3> 
                                </div> 
                                <div class="panel-body"> 
                                  <img class="logo" src="images/mike.jpg" alt="logo" >
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                  

        </div>
        
    </div>
@endsection