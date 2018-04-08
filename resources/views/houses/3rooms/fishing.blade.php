@extends('template')

@section('content')

    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->

            <!-- Menu -->
        @include('menu')
        <!-- End menu -->

            <!-- Room -->
            <div class="content three_quarter">

                <div class="btmspace-50 center">
                    <h2>3-комнатный дом Рыбачья</h2>

                    <div class="rooms-block">
                        <div class="rooms">
                            <span class="fa fa-key"></span> вмещает 4-9 человек
                        </div>
                    </div>
                </div>

                <p><b>К пляжу 10-15 минут пройти.</b></p>
                <p><b>1 этаж</b>. Отличный выбор для спокойного отдыха. Евроремонт, летом в доме не жарко, натяжные потолки, напольное покрытие ламинат и плитка.
                    Нет других отдыхающих на территории. </p>


                <!-- Description -->
                <div class="col-sm-12 row">

                    <div class="col-sm-6">

                        <h4>В доме</h4>
                        <nav class="sdb_holder">
                            <ul>
                                <li><span class="fa fa-check-square-o"></span> 3 отдельных спальни</li>
                                <li><span class="fa fa-check-square-o"></span> ТВ</li>
                                <li><span class="fa fa-check-square-o"></span> Wi-fi</li>
                                <li><span class="fa fa-check-square-o"></span> санузел совмещенный
                                    <ul class="li-2-level">
                                        <li>• холодная и горячая вода круглосуточно</li>
                                    </ul>
                                </li>
                                <li><span class="fa fa-check-square-o"></span> Кухня:
                                    <ul class="li-2-level">
                                        <li>• электрочайник</li>
                                        <li>• микроволновка</li>
                                        <li>• стеклокерамическая електроплита</li>
                                        <li>• холодильник</li>
                                        <li>• вся необходимая посуда</li>
                                        <li>• обеденный уголок</li>
                                        <li>• стиральная машинка</li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>

                    </div>

                    <div class="col-sm-6">

                        <h4>Планировка спальных мест</h4>
                        <nav class="sdb_holder">
                            <ul>
                                <li><span class="fa fa-check-square-o"></span> спальня 1
                                    <ul class="li-2-level">
                                        <li>• двухспалка и односпалка </li>
                                    </ul>
                                </li>
                                <li><span class="fa fa-check-square-o"></span> спальня 2
                                    <ul class="li-2-level">
                                        <li>• двухспалка и полуторка </li>
                                    </ul>
                                </li>
                                <li><span class="fa fa-check-square-o"></span> спальня 3
                                    <ul class="li-2-level">
                                        <li>• полуторка </li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>

                        <h4>Во дворе</h4>
                        <nav class="sdb_holder">
                            <ul>
                                <li><span class="fa fa-check-square-o"></span> парковка для 2 авто</li>
                                <li><span class="fa fa-check-square-o"></span> мангал</li>
                                <li><span class="fa fa-check-square-o"></span> обеденный стол</li>
                                <li><span class="fa fa-check-square-o"></span> дворик с ковром под траву</li>
                            </ul>
                        </nav>

                    </div>

                </div>
                <!-- End description -->

                <img src="{{ asset("images/homes/fishing/25.jpg") }}" alt="">



                <!-- Gallery -->
                <div class="col-md-12 row">

                    <hr>

                    <div class="gal">

                        <img src="{{ asset("images/homes/fishing/1.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/2.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/3.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/4.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/5.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/6.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/26.jpeg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/7.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/8.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/9.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/10.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/11.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/12.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/13.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/14.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/15.jpeg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/16.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/17.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/18.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/19.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/20.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/21.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/22.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/fishing/23.jpg") }}" alt="">

                    </div>

                </div>
                <!-- End gallery -->

                <img src="{{ asset("images/homes/fishing/24.jpg") }}" alt="">


            </div>
            <!-- End room -->

        </main>
        <!-- / main body -->

    </div>


@endsection