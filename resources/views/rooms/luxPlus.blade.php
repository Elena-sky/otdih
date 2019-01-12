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
                    <h2>Люкс с балконом</h2>

                    <div class="rooms-block">
                        <div class="rooms">
                            <span class="fa fa-key"></span> 3х-местный
                        </div>
                        <div class="rooms">
                            <span class="fa fa-key"></span> 4х-местный
                        </div>
                    </div>
                </div>

                <p>Номер на 2 этаже. </p>

                <!-- Description -->
                <div class="col-sm-12 row">

                    <div class="col-sm-6">

                        <h4>В номере</h4>
                        <nav class="sdb_holder">
                            <ul>
                                <li><span class="fa fa-check-square-o"></span> ТВ;</li>
                                <li><span class="fa fa-check-square-o"></span> Wi-fi</li>
                                <li><span class="fa fa-check-square-o"></span> санузел
                                    <ul class="li-2-level">
                                        <li>• холодная и горячая вода круглосуточно</li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>

                    </div>

                    <div class="col-sm-6">

                        <h4>На этаже</h4>
                        <nav class="sdb_holder">
                            <ul>
                                <li><span class="fa fa-check-square-o"></span> общий балкон с столиком</li>
                                <li><span class="fa fa-check-square-o"></span> кухня общего пользования:
                                    <ul class="li-2-level">
                                        <li>• электрочайник</li>
                                        <li>• газовая плита</li>
                                        <li>• холодильник</li>
                                        <li>• вся необходимая посуда</li>
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

                        <img src="{{ asset("images/rooms/luxPlus/1.jpeg") }}" alt="">

                        <img src="{{ asset("images/rooms/luxPlus/2.jpeg") }}" alt="">

                        <img src="{{ asset("images/rooms/luxPlus/3.jpeg") }}" alt="">

                        <img src="{{ asset("images/rooms/luxPlus/11.jpeg") }}" alt="">

                        <img src="{{ asset("images/rooms/luxPlus/6.jpeg") }}" alt="">

                        <img src="{{ asset("images/rooms/luxPlus/5.jpeg") }}" alt="">

                        <img src="{{ asset("images/rooms/luxPlus/4.jpeg") }}" alt="">

                        <img src="{{ asset("images/rooms/luxPlus/7.jpeg") }}" alt="">

                        <img src="{{ asset("images/rooms/luxPlus/8.jpeg") }}" alt="">

                        <img src="{{ asset("images/rooms/luxPlus/12.jpg") }}" alt="">

                        <img src="{{ asset("images/rooms/luxPlus/9.jpeg") }}" alt="">

                        <img src="{{ asset("images/rooms/luxPlus/10.jpeg") }}" alt="">

                    </div>

                </div>
                <!-- End gallery -->

            </div>
            <!-- End room -->

        </main>
        <!-- / main body -->

    </div>


@endsection