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
                    <h2>2-комнатный Салатовый домик</h2>

                    <div class="rooms-block">
                        <div class="rooms">
                            <span class="fa fa-key"></span> вмещает 4-8 человек
                        </div>
                    </div>
                </div>

                <p><b>К пляжу 5 минут пройти.</b></p>
                <p><b>1 этаж</b></p>


                <!-- Description -->
                <div class="col-sm-12 row">

                    <div class="col-sm-6">

                        <h4>В доме</h4>
                        <nav class="sdb_holder">
                            <ul>
                                <li><span class="fa fa-check-square-o"></span> 2 отдельных спальни</li>
                                <li><span class="fa fa-check-square-o"></span> ТВ</li>
                                <li><span class="fa fa-check-square-o"></span> Wi-fi</li>
                                <li><span class="fa fa-check-square-o"></span> санузел раздельного типа
                                    <ul class="li-2-level">
                                        <li>• холодная и горячая вода круглосуточно</li>
                                    </ul>
                                </li>
                                <li><span class="fa fa-check-square-o"></span> Кухня:
                                    <ul class="li-2-level">
                                        <li>• чайник</li>
                                        <li>• газовая плита</li>
                                        <li>• холодильник</li>
                                        <li>• вся необходимая посуда</li>
                                        <li>• обеденный уголок</li>
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
                                        <li>• двухспалка </li>
                                        <li>• односпалка </li>

                                    </ul>
                                </li>
                                <li><span class="fa fa-check-square-o"></span> спальня 2
                                    <ul class="li-2-level">
                                        <li>• двухспалка</li>
                                        <li>• двухспалка</li>
                                        <li>• односпалка </li>

                                    </ul>
                                </li>

                            </ul>
                        </nav>

                    </div>

                </div>
                <!-- End description -->

                <!-- Gallery -->
                <div class="col-md-12 row">

                    <hr>

                    <div class="gal">

                        <img src="{{ asset("images/homes/lime/1.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/lime/2.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/lime/3.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/lime/4.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/lime/5.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/lime/7.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/lime/6.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/lime/8.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/lime/9.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/lime/10.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/lime/11.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/lime/12.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/lime/13.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/lime/14.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/lime/15.jpg") }}" alt="">

                    </div>

                </div>
                <!-- End gallery -->


            </div>
            <!-- End room -->

        </main>
        <!-- / main body -->

    </div>


@endsection