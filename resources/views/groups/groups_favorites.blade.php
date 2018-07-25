@if (count($groups) > 0)
<ul class="media-list">
@foreach ($groups as $group)
  
    <li class="media">
            <div class ="joymiyu col-xs-4">
            @if(isset($group->group_picture))
                    <img class="joymiyu" src="{{ $group->group_picture }}" alt="写真を挿入">
                    @elseif($group->category == "カフェテリア")
                    <img class="joymiyu"  src="{{ asset('images/cafeteria.jpg') }}" alt="写真を挿入">
                    @elseif($group->category=="休憩時間")
                    <img class="joymiyu"  src="{{ asset('images/Kyuukeizikann.jpg') }}" alt="写真を挿入">
                    @elseif($group->category=="おしゃべり")
                    <img class="joymiyu"  src="{{ asset('images/kataru.jpg') }}" alt="写真を挿入">
                    @elseif($group->category=="飲み会")
                    <img class="joymiyu"  src="{{ asset('images/nomikai.jpg') }}" alt="写真を挿入">
                    @elseif($group->category=="スポーツ")
                    <img class="joymiyu"  src="{{ asset('images/sport.png') }}" alt="写真を挿入">
                    @elseif($group->category=="グルメ")
                    <img class="joymiyu"  src="{{ asset('images/gurume.jpg') }}" alt="写真を挿入">
                    @elseif($group->category=="アウトドア")
                    <img class="joymiyu"  src="{{ asset('images/outdoor.jpg') }}" alt="写真を挿入">
                    @elseif($group->category=="映画鑑賞")
                    <img class="joymiyu"  src="{{ asset('images/movie.jpg') }}" alt="写真を挿入">
                    @elseif($group->category=="その他")
                    <img class="joymiyu"  src="{{ asset('images/other.jpg') }}" alt="写真を挿入">
                    @endif
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
@endif