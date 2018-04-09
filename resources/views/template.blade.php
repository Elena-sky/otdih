
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Otdih</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="{{ asset("css/layout.css") }}" rel="stylesheet" type="text/css" media="all">

    <link rel="stylesheet" href="{{ asset("css/font-awesome/css/font-awesome.min.css") }}">



</head>
<body id="top">

<div class="wrapper row0">
    <div id="topbar" class="hoc clear">
        <!-- ################################################################################################ -->
        <div class="fl_left">
            <ul class="nospace">
                <li><i class="fa fa-phone"></i> +38(097)95 61 097</li>
                <li><i class="fa fa-phone"></i>  +38(093)91 01 377</li>
            </ul>
        </div>
        <div class="fl_right">
            <ul class="nospace">
                <li><a href="/"><i class="fa fa-lg fa-home"></i></a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </div>
        <!-- ################################################################################################ -->
    </div>
</div>

<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url({{ asset("images/backgrounds/main.jpg") }});">
    <!--  -->
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <!-- -->
            <div id="logo" class="fl_left">
                <h1><a href="/">Жилье у моря</a></h1>
            </div>
            <nav id="mainav" class="fl_right">
                <ul class="clear">
                    {{--<li class="active"><a href="/">Главная</a></li>--}}
                    <li><a class="drop" href="#">Номера</a>
                        <ul>
                            <li><a href="{{ route('roomsStandard') }}">Стандарт</a>
                            </li>
                            <li><a href="{{ route('roomsLux') }}">Люкс</a>
                            </li>
                            <li><a href="{{ route('roomsMansard') }}">Мансарда</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="drop" href="#">Домики</a>
                        <ul>
                            <li><a class="drop" href="#">1 комнатные</a>
                                <ul>
                                    <li><a href="{{ route('housePink') }}">Розовый</a></li>
                                    <li><a href="{{ route('houseGreen') }}">Зеленый</a></li>
                                </ul>
                            </li>
                            <li><a class="drop" href="#">2 комнатные</a>
                                <ul>
                                    <li><a href="{{ route('houseLime') }}">Салатовый</a></li>
                                    <li><a href="{{ route('houseLilac') }}">Сиреневый</a></li>
                                </ul>
                            </li>
                            <li><a class="drop" href="#">3 комнатные</a>
                                <ul>
                                    <li><a href="{{ route('houseFishing') }}">Рыбачья</a></li>
                                    <li><a href="{{ route('houseCoast') }}">Набережная</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ route('reservation') }}">Бронирование</a></li>
                </ul>
            </nav>
            <!-- -->
        </header>
    </div>
    <!-- -->
     <div id="pageintro" class="hoc clear">
        <!-- -->
        <div class="flexslider basicslider">
            <ul class="slides">
                <li>
                    <article>
                        <p>Habitasse</p>
                        <h3 class="heading">Aenean viverra arcu</h3>
                        <p>Mi vitae condimentum sapien phasellus</p>
                        <footer><a class="btn" href="#">Accumsan elementum</a></footer>
                    </article>
                </li>
                <li>
                    <article>
                        <p>Suscipit</p>
                        <h3 class="heading">Maecenas felis risus</h3>
                        <p>Feugiat eu libero rhoncus laoreet congue</p>
                        <footer><a class="btn inverse" href="#">Ante aenean</a></footer>
                    </article>
                </li>
                <li>
                    <article>
                        <p>Dictumst</p>
                        <h3 class="heading">Amet sodales odio</h3>
                        <p>In hac platea fusce eu rutrum nisi amet</p>
                        <footer><a class="btn" href="#">Turpis in diam</a></footer>
                    </article>
                </li>
            </ul>
        </div>
        <!-- -->
    </div>
    <!-- -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- -->


@yield('content')

<!-- Footer Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url({{ asset("images/backgrounds/footer.jpg") }});">
    <!-- -->
    <div class="wrapper row4">
        <footer id="footer" class="hoc clear">
            <!-- -->
            <div class="btmspace-50 center">
                <h2 class="heading">Жилье у моря в Одессе</h2>
                <p>Наше месторасположение позволяет отдохнуть от городской суеты. Свежий морской воздух благоприятно влияет на здоровье. Замечательные места для вечерних прогулок. К морю 350м (5 минут пройти).</p>
            </div>
            <ul class="nospace group">
                <li class="one_quarter first">
                    <div class="infobox"><i class="fa fa-phone"></i>
                        <ul class="nospace">
                            <li>+38(097)95 61 097</li>
                            <li>+38(093)91 01 377</li>
                        </ul>
                    </div>
                </li>
                <li class="one_quarter">
                    <div class="infobox"><i class="fa fa-vk"></i>
                        <ul class="nospace">
                            <li><a href="https://vk.com/otdix_u_morya">Наша группа VK</a></li>
                        </ul>
                    </div>
                </li>
                <li class="one_quarter">
                    <div class="infobox"><i class="fa fa-odnoklassniki"></i>
                        <ul class="nospace">
                            <li><a href="https://www.ok.ru/otdih.od.ua">Наша группа Ok</a></li>
                        </ul>
                    </div>
                </li>
                <li class="one_quarter">
                    <div class="infobox"><i class="fa fa-anchor"></i>
                        <ul class="nospace">
                            <li>Сезон</li>
                            <li>Май - Сентябрь</li>
                        </ul>
                    </div>
                </li>
            </ul>
            <!--  -->
        </footer>
    </div>
    <!--  -->
    <nav class="quicklinks row4">
        <ul class="hoc clear">
            <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="{{ route('reservation') }}">Бронирование</a></li>
        </ul>
    </nav>
    <!--  -->



    <div class="wrapper row5">
        <div id="copyright" class="hoc clear">
            <!--  -->
            <p class="fl_left">Copyright &copy; 2018 - Alena Soroka</p>
            <p class="fl_right">Site by otdih.od.ua</p>
            <!--  -->
        </div>
    </div>

</div>
<!-- End Footer Background Image Wrapper -->

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{{ asset("js/jquery.min.js") }}"></script>
<script src="{{ asset("js/jquery.backtotop.js") }}"></script>
<script src="{{ asset("js/jquery.mobilemenu.js") }}"></script>
<script src="{{ asset("js/jquery.flexslider-min.js") }}"></script>


</body>
</html>



