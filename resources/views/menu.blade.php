<div class="sidebar one_quarter first">

    <h6>Навигация</h6>
    <nav class="sdb_holder">
        <ul>
            <li><a href="#">Номера</a>
                <ul>
                    <li><a href="{{ route('rooms', 'standard') }}">Стандарт</a></li>
                    <li><a href="{{ route('rooms', 'lux') }}">Люкс</a></li>
                    <li><a href="{{ route('rooms', 'luxPlus') }}">Люкс с балконом</a></li>
                    <li><a href="{{ route('rooms', 'mansard') }}">Мансарда</a></li>
                </ul>
            </li>
            <li><a href="#">Домики</a>
                <ul>
                    <li><a href="">1 комнатные</a>
                        <ul>
                            <li><a href="{{ route('houses', 'pink') }}">Розовый </a></li>
                            <li><a href="{{ route('houses', 'green') }}">Зеленый</a></li>
                        </ul>
                    </li>
                    <li><a href="">2 комнатные</a>
                        <ul>
                            <li><a href="{{ route('houses', 'lime') }}">Салатовый</a></li>
                            <li><a href="{{ route('houses', 'lilac') }}">Сиреневый</a></li>
                        </ul>
                    </li>
                    <li><a href="">3 комнатные</a>
                        <ul>
                            <li><a href="{{ route('houses', 'fishing') }}">Рыбачья</a></li>
                            <li><a href="{{ route('houses', 'coast') }}">Набережная</a></li>
                        </ul>
                    </li>
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