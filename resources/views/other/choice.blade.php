@extends('template')

@section('content')


<div class="wrapper row3">
    <main class="hoc container clear">
        <!-- main body -->

        <!-- Menu -->
    @include('menu')
    <!-- End menu -->

        <!-- Reservation -->
        <div class="content three_quarter">

            <!-- Description -->
            <div class="content">
                <h6 class="norm inf">Выберите нужные удобства в номер</h6>

                <form class="inf">

                    <div class="reservation">
                        <p class="rooms-block">
                            <input type="checkbox" class="kitchen" value="1">
                            - Кухня в номере
                        </p>
                    </div>

                    <div class="reservation">
                        <p class="rooms-block ">
                            <input type="checkbox" class="toilet" value="1">
                            - Душ и туалет в номере
                        </p>
                    </div>

                    <div class="reservation">
                        <p class=" roomsV">Укажите колличество человек (включая детей с 1 года)</p>
                        <input type="number" class="form-control styler rooms-block count"  style="width: 50px;"
                               value="2" min="2" max="9" >
                    </div>

                </form>

                <div class="rooms-block">
                    <div class="rooms">
                        <h6 class="norm">Вам подойдет:</h6>
                    </div>
                    <div class="variant">

                        <div class="std varR roomsV standard">
                            <a href="{{ route('roomsStandard') }}">
                                <span class="fa fa-key"></span> Стандарт
                            </a>
                        </div>

                        <div class="std varR roomsV standard">
                             <a href="{{ route('roomsMansard') }}">
                                <span class="fa fa-key"></span> Мансарда
                            </a>
                        </div>

                        <div class="std varR roomsV lux">
                            <a href="{{ route('roomsLux') }}">
                                <span class="fa fa-key"></span> Люкс
                            </a>
                        </div>

                        <div class="std varR roomsV luxPlus">
                            <a href="{{ route('roomsLuxPlus') }}">
                                <span class="fa fa-key"></span> Люкс балкон
                            </a>
                        </div>

                        <div class="std varR roomsV house1">
                            <span class="fa fa-key"></span> 1 комнатный домик
                            <ul>
                                <a href="{{ route('housePink') }}">
                                    <li>Розовый</li>
                                </a>
                                <a href="{{ route('houseGreen') }}">
                                    <li>Зеленый</li>
                                </a>
                            </ul>
                        </div>

                        <div class="std varR roomsV house2">
                            <span class="fa fa-key"></span> 2 комнатный домик
                            <ul>
                                <a href="{{ route('houseLilac') }}">
                                    <li>Сиреневый</li>
                                </a>
                                <a href="{{ route('houseLime') }}">
                                    <li>Салатовый</li>
                                </a>
                            </ul>

                            <span class="fa fa-key"></span> 3 комнатный домик
                            <ul>
                                <a href="{{ route('houseFishing') }}">
                                    <li>Рыбачья</li>
                                </a>
                                <a href="{{ route('houseCoast') }}">
                                    <li>Набережная</li>
                                </a>
                            </ul>
                        </div>

                    </div>
                </div>


            </div>

        </div>
        <!-- End reservation -->

<!-- End room -->

</main>
<!-- / main body -->

</div>


@endsection

