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
                    <h2>1-комнатный Розовый домик</h2>

                    <div class="rooms-block">
                        <div class="rooms">
                            <span class="fa fa-key"></span> вмещает 2-4 человек
                            <h6>этаж - 1</h6>
                        </div>
                    </div>
                </div>

                <p><b>К пляжу 5 минут пройти.</b></p>

                <!-- Description -->
                <div class="col-sm-12 row">

                    <div class="col-sm-6">

                        <h4>В домике</h4>
                        <nav class="sdb_holder">
                            <ul>
                                <li><span class="fa fa-check-square-o"></span> 2 кровати и 1 раскладная кровать</li>
                                <li><span class="fa fa-check-square-o"></span> ТВ</li>
                                <li><span class="fa fa-check-square-o"></span> Wi-fi</li>
                                <li><span class="fa fa-check-square-o"></span> санузел совмещенный
                                    <ul class="li-2-level">
                                        <li>• холодная и горячая вода круглосуточно</li>
                                        <li>• стиральная машинка</li>
                                    </ul>
                                </li>
                                <li><span class="fa fa-check-square-o"></span> Кухня:
                                    <ul class="li-2-level">
                                        <li>• чайник</li>
                                        <li>• газовая плита</li>
                                        <li>• холодильник</li>
                                        <li>• вся необходимая посуда</li>
                                        <li>• стол</li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>

                    </div>

                    <div class="col-sm-6">

                        <h4>Планировка спальных мест</h4>
                        <nav class="sdb_holder">
                            <ul>
                                <li><span class="fa fa-check-square-o"></span> двухспалка</li>
                                <li><span class="fa fa-check-square-o"></span> односпалка</li>
                                <li><span class="fa fa-check-square-o"></span> односпалка</li>

                            </ul>
                        </nav>

                    </div>

                </div>
                <!-- End description -->

                <!-- Gallery -->
                <div class="col-md-12 row">

                    <hr>

                    <div class="gal">

                        <img src="{{ asset("images/homes/pink/1.jpeg") }}" alt="">

                        <img src="{{ asset("images/homes/pink/2.jpeg") }}" alt="">

                        <img src="{{ asset("images/homes/pink/5.jpg") }}" alt="">


                        <img src="{{ asset("images/homes/pink/3.jpeg") }}" alt="">

                        <img src="{{ asset("images/homes/pink/4.jpeg") }}" alt="">


                        <img src="{{ asset("images/homes/pink/6.jpg") }}" alt="">

                        <img src="{{ asset("images/homes/pink/8.jpg") }}" alt="">


                        <img src="{{ asset("images/homes/pink/7.jpg") }}" alt="">




                    </div>

                </div>
                <!-- End gallery -->


            </div>
            <!-- End room -->

        </main>
        <!-- / main body -->

    </div>


@endsection