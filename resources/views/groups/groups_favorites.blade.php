@if (count($groups) > 0)
<ul class="media-list">
@foreach ($groups as $group)
  
    <li class="media">
            <div class ="joymiyu col-xs-4">
            <img class="media-object img-rounded img-responsive" src="{{ asset('storage/images/' . $group->group_picture) }}" alt="写真を挿入">
            </div>
        
        <div class="media-body">
            <div>
                <div class='e'> {{ $group->groupname }}</div>
            </div>
            <div>
                <p>{!! link_to_route('groups.show', 'View this group', ['id' => $group->id]) !!}</p>
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $groups->render() !!}
@endif