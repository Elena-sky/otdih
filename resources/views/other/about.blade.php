@extends('template')
@section('content')
    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->
        @include('parts.navigation', [
                 'categories' => $options['categories'],
                 'rooms' => $options['rooms']
               ])
        <!-- Reservation -->
            <div class="content three_quarter">
                <!-- Description -->
                <div class="col-sm-12 row">
                    <div class="content">
                        <div class="reservation">
                            <h6 class="norm">О нас</h6>
                            <p> Мы находимся по адресу: Одесса, Крыжановка-1, ул. Набережная.</p>
                            <img src="{{ asset("images/territory/map1.jpg") }}" alt="">
                            <p> Удобная транспортная развязка позволяет беспрепятственно
                                добраться в любую точку города Одессы. В 10 минутах езды находится
                                торгово-развлекательный
                                центр с одним из крупнейших кинозалов Украины.</p>
                            <img src="{{ asset("images/territory/map2.png") }}" alt="">
                            <p> Специально для посетителей нашего сайта, мы подготовили видео, посмотрев которое Вы бы
                                смогли
                                оценить расстояние от дома, в комнаты которого у Вас есть возможность заселится, до
                                моря.
                            </p>
                            <iframe width="696" height="400" src="https://www.youtube.com/embed/a7sSBWig9yQ"
                                    frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End reservation -->
    </div>
    <!-- End room -->
    </main>
    <!-- / main body -->
    </div>
@endsection
