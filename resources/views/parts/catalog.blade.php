@isset($categories)
    @foreach($categories as $category)
        @if($category['name'] == 'Номера')
            {{--todo style--}}
            <li><a href="#" class="drop" style="pointer-events: none;cursor: default;">{{$category['name']}}</a>
                <ul>
                    @foreach($category->rooms as $room)
                        <li><a href="{{ route('room', $room['id']) }}">{{$room['name']}}</a></li>
                    @endforeach
                </ul>
            </li>
        @endif
    @endforeach
    <li><a href="#" class="drop" style="pointer-events: none;cursor: default;">Домики</a>
        <ul>
            @foreach($categories as $category)
                @if($category['name'] != 'Номера')
                    <li><a href="#" style="pointer-events: none;cursor: default;">{{$category['name']}}</a>
                        <ul>
                            @foreach($category->rooms as $room)
                                <li><a href="{{ route('room', $room['id']) }}">{{$room['name']}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endif
            @endforeach
        </ul>
    </li>
@endisset
