<div class="sidebar one_quarter first">

    <h6>Навигация</h6>
    <nav class="sdb_holder">
        <ul>
            @foreach($categories as $category)
                @if($category['name'] == 'Номера')
                    <li>{{$category['name']}}
                        <ul>
                            @foreach($category->rooms as $room)
                                <li><a href="{{ route('room', $room['id']) }}">{{$room['name']}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endif
            @endforeach
            <li>Домики
                <ul>
                    @foreach($categories as $category)
                        @if($category['name'] != 'Номера')
                            <li><a href="" style="pointer-events: none;cursor: default;">{{$category['name']}}</a>
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
            <li><a href="{{ route('reservation') }}">Бронирование</a></li>
            <li><a href="{{ route('contactsPage') }}">Контакты</a></li>
            <li><a href="{{ route('aboutPage') }}">О нас</a></li>
        </ul>
    </nav>

    <div class="sdb_holder">
        <h6>Контакты</h6>
        <address>
            Одесса<br>
            остановка Крыжановка<br>
            ул. Набережная<br>

            5 минут к морю<br>
            <br>
            Tel: +38(097)95 61 097<br>
            Tel: +38(093)91 01 377<br>
        </address>
    </div>

</div>