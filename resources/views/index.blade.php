@extends('template')

@section('content')


    <div class="wrapper row3">
        <main class="hoc container clear">

            <!-- Hello-->
            <div class="center btmspace-80">
                <h3 class="heading">Приветствуем Вас на нашем сайте</h3>
                <p class="nospace">Близится жаркая пора года- ЛЕТО : ) . Предлагаем Вам посетить город-герой Одессу, остановившись
                    при этом в спокойном и уютном месте вдали от городской суеты. Уютные и прохладные комнаты дадут Вам прекрасную
                    возможность отдохнуть от принятия солнечных ванн на пляже либо-же просмотра достопримечательностей Одессы.
                    Удобная транспортная развязка позволяет беспрепятственно добраться в любую точку города Одессы. В 10 минутах
                    езды находится торгово-развлекательный центр с одним из крупнейших кинозалов Украины. </p>
            </div>
            <!--  End Hello-->

            <div class="clear"></div>
        </main>
    </div>

    <!-- -->

    <div class="wrapper bgded overlay" style="background-image:url({{ asset("images/backgrounds/2.jpg") }});">
        <article class="hoc container clear">
            <!-- -->
            <div class="three_quarter first">
                <h6 class="nospace">Подобрать номер</h6>
                <p class="nospace">Мы можем помочь вам подобрать наиболее подходящий номер</p>
            </div>
            <footer class="one_quarter"><a class="btn" href="#">Детальнее &raquo;</a></footer>
            <!-- -->
        </article>
    </div>

    <!-- -->

    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->
            <div class="center btmspace-80">
                <h3 class="heading">Инфраструктура</h3>
            </div>

            <ul class="nospace group services inf">
                <li class="one_third first">
                    <article><i class="fa fa-sun-o"></i>
                        <h6 class="heading">Близко к морю</h6>
                        <p>К морю пройти 5 минут пешком.</p>
                    </article>
                </li>
                <li class="one_third">
                    <article><i class="fa fa-life-ring"></i>
                        <h6 class="heading">Пляж песчаный</h6>
                        <p>На пляже натуральный песок, глубина постепенная. На пляже есть скутеры, катамараны, кафе,
                            детская площадка. </p>
                    </article>
                </li>
                <li class="one_third">
                    <article><i class="fa fa-wifi"></i>
                        <h6 class="heading">Wi-Fi</h6>
                        <p>Бесплатный Wi-Fi</p>
                    </article>
                </li>
                <li class="one_third first ">
                    <article><i class="fa fa-key"></i>
                        <h6 class="heading">Бронирование</h6>
                        <p>Спланированый отдых удобнее чем искать жилье в день приезда.</p>
                    </article>
                </li>
                <li class="one_third inf">
                    <article><i class="fa fa-shopping-cart"></i>
                        <h6 class="heading">Магазины</h6>
                        <p>Рядом 2 МАГАЗИНА (3 минуты пешом). На остановке есть РЫНОК, СУПЕРМАРКЕТ. </p>
                    </article>
                </li>
                <li class="one_third">
                    <article><i class="fa fa-cutlery"></i>
                        <h6 class="heading">Кафе</h6>
                        <p>Рядом 2 КАФЕ (3 минуты пешом) с комплексными обедами</p>
                    </article>
                </li>
                <li class="one_third first ">
                    <article><i class="fa fa-smile-o"></i>
                        <h6 class="heading">Развлечения</h6>
                        <p>Через остановку гидропарк, клубы, бары, дискотеки на берегу моря, детские аттракционы.</p>
                    </article>
                </li>
                <li class="one_third">
                    <article><i class="fa fa-car"></i>
                        <h6 class="heading">Автостоянка</h6>
                        <p>АВТОМОБИЛЬ можно поставить на улице возле дома или на охраняемую стоянку (к ней 2 минуты пройти)
                            стоимость 15 грн сутки.</p>
                    </article>
                </li>
                <li class="one_third">
                    <article><i class="fa fa-bus"></i>
                        <h6 class="heading">Транспортная развязка</h6>
                        <p>Общественный городской транспорт едет в любую часть города.</p>
                    </article>
                </li>
            </ul>

            <div class="center btmspace-80">
                <p class="nospace">До остановки пройтись 10 минут и 20 минут ехать на общественном городском транспорте в центр.
                    Бесплатные маршрутки в большой ТРЦ РИВЬЕРА (магазины, супермаркет АШАН, кинотеатр, детский игровой центр Леопарк, кафе, боулинг).</p>
            </div>

            <div class="center btmspace-80">
                <h3 class="heading">Любимая Крыжановка</h3>

                <!-- Gallery -->
                <div class="col-md-12 row">

                    <div class="gal">

                        <img src="{{ asset("images/territory/1.jpg") }}" alt="">

                        <img src="{{ asset("images/territory/2.jpeg") }}" alt="">

                        <img src="{{ asset("images/territory/4.jpeg") }}" alt="">

                        <img src="{{ asset("images/territory/3.jpeg") }}" alt="">

                        <img src="{{ asset("images/territory/5.jpeg") }}" alt="">

                        <img src="{{ asset("images/territory/6.jpeg") }}" alt="">

                        <img src="{{ asset("images/territory/7.jpeg") }}" alt="">

                        <img src="{{ asset("images/territory/11.jpeg") }}" alt="">

                        <img src="{{ asset("images/territory/8.jpeg") }}" alt="">

                        <img src="{{ asset("images/territory/9.jpeg") }}" alt="">

                        <img src="{{ asset("images/territory/10.jpeg") }}" alt="">

                        <img src="{{ asset("images/territory/12.jpeg") }}" alt="">

                        <img src="{{ asset("images/territory/13.jpeg") }}" alt="">

                        <img src="{{ asset("images/territory/14.jpeg") }}" alt="">

                        <img src="{{ asset("images/territory/15.jpeg") }}" alt="">

                    </div>

                </div>
                <!-- End gallery -->
            </div>
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
    <!-- -->

    <!-- -->
    <div class="wrapper bgded overlay" style="background-image:url({{ asset("images/backgrounds/1.jpg") }});">
        <article class="hoc container center">
            <!-- -->
            <i class="block btmspace-50 fa fa-4x fa-street-view"></i>
            <h6>Контактная форма</h6>
            <p class="btmspace-50">Напишите нам</p>
            <footer><a class="btn inverse" href="#">Convallis pharetra</a></footer>
            <!-- -->
        </article>
    </div>
    <!-- -->

    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->

            <div class="center btmspace-80">
                <h3 class="heading">Пляж</h3>

                <!-- Gallery -->
                <div class="col-md-12 row">

                    <div class="gal">

                        <img src="{{ asset("images/beach/1.jpeg") }}" alt="">

                        <img src="{{ asset("images/beach/2.jpeg") }}" alt="">

                        <img src="{{ asset("images/beach/3.jpeg") }}" alt="">

                        <img src="{{ asset("images/beach/4.jpeg") }}" alt="">

                        <img src="{{ asset("images/beach/5.jpg") }}" alt="">

                        <img src="{{ asset("images/beach/6.jpg") }}" alt="">

                        <img src="{{ asset("images/beach/7.jpg") }}" alt="">

                        <img src="{{ asset("images/beach/9.jpeg") }}" alt="">

                        <img src="{{ asset("images/beach/10.jpg") }}" alt="">

                        <!-- -->

                        <img src="{{ asset("images/sea/1.jpeg") }}" alt="">

                        <img src="{{ asset("images/sea/2.jpg") }}" alt="">

                        <img src="{{ asset("images/sea/5.jpeg") }}" alt="">

                        <img src="{{ asset("images/sea/3.jpg") }}" alt="">

                        <img src="{{ asset("images/sea/4.jpg") }}" alt="">

                        <img src="{{ asset("images/sea/6.jpg") }}" alt="">

                        <img src="{{ asset("images/sea/7.jpg") }}" alt="">

                        <img src="{{ asset("images/sea/8.jpg") }}" alt="">

                        <img src="{{ asset("images/sea/9.jpeg") }}" alt="">

                        <img src="{{ asset("images/sea/10.jpg") }}" alt="">

                        <img src="{{ asset("images/sea/11.jpg") }}" alt="">

                        <img src="{{ asset("images/beach/8.jpg") }}" alt="">

                        <img src="{{ asset("images/sea/12.png") }}" alt="">

                        <img src="{{ asset("images/sea/13.jpg") }}" alt="">


                    </div>

                </div>
                <!-- End gallery -->
            </div>

            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
    <!-- -->

@endsection