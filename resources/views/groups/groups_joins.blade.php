@if (count($groups) > 0)
<ul class="media-list">
@foreach ($groups as $group)
  
    <li class="media">
            <div class ="joymiyu col-xs-4">
            <img class="joymiyu" src="{{ $group->group_picture }}" alt="写真を挿入">
            </div>
        
        <div class="media-body">
            
            <div>  
            
                       
                       <div class='e'>{!! link_to_route('groups.show',$group->groupname, ['id' => $group->id]) !!}</div>
                       {{ $group->year }}/{{ $group->month }}/{{ $group->date }}
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $groups->render() !!}
@else
    <p style="margin:50px">CATEGORY LISTから興味のあるグループを探して、参加しよう！
    <br><a href="/groups">CATEGORY LIST</a>へ</p>
@endif