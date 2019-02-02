<div class="sidebar one_quarter first">
    <h6>Навигация</h6>
    <nav class="sdb_holder">
        <ul>
            <!-- Menu -->
        @include('parts.catalog', [
            'categories' => $categories,
            'rooms' => $rooms
        ])
        <!-- End menu -->
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
            @foreach($options['phones'] as $phone)
                Tel: {{$phone['phone']}}<br>
            @endforeach
            @foreach($options['viber'] as $viber)
                <li>Viber: {{ $viber['phone'] }}</li>
            @endforeach
        </address>
    </div>
</div>
