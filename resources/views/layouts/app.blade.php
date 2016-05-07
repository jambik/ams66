<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700,400italic,300italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/app.bundle.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('library/jquery.scrollfire/jquery.scrollfire.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    @yield('header_scripts')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>@yield('title')</title>
</head>
<body class="body">

<div class="main-container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                <span class="sr-only">Меню</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="logo navbar-header">
                <a href="{{ route('index') }}"><img src="{{ asset('img/logo.png') }}" class="img-responsive"></a>
                <div><a href="{{ route('index') }}">Академия малоэтажного строительства</a></div>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <div class="menu col-lg-6 col-md-12 text-center">
                    <ul>
                        <li><a href="{{ route('land-department') }}">Земельный департамент</a></li>
                        <li><a href="{{ route('building-department') }}">Департамент строительства</a></li>
                        <li><a href="{{ route('investing-department') }}">Инвестирование</a></li>
                        <li><a href="#">Наши партнеры</a></li>
                    </ul>
                </div>
                <form class="search navbar-right col-lg-2" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Поиск по сайту" name="search" id="search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    @yield('content')

    <section id="recalls" style="opacity: 0;">
        <div class="container">
            <div class="text-xl">Отзывы</div>

            <div class="row" style="opacity: 0;">
                <div class="col-md-3 col-sm-3">
                    <img src="{{ asset('img/recaller-1.jpg') }}" class="img-responsive img-circle">
                </div>
                <div class="col-md-8 col-sm-9">
                    <blockquote>
                        <p>Я работаю не далеко от Метро “Таганская”. Доставка из “ПловХаус” всегда быстро и очень вкусно. Спасибо вам большое.</p>
                        <footer>Владимир Сергеев - <cite>12.02.2016</cite></footer>
                    </blockquote>
                </div>
            </div>

            <div class="row" style="opacity: 0;">
                <div class="col-md-3 col-sm-3">
                    <img src="{{ asset('img/recaller-2.jpg') }}" class="img-responsive img-circle">
                </div>
                <div class="col-md-8 col-sm-9">
                    <blockquote>
                        <p>Я работаю не далеко от Метро “Таганская”. Доставка из “ПловХаус” всегда быстро и очень вкусно. Спасибо вам большое.</p>
                        <footer>Владимир Сергеев - <cite>12.02.2016</cite></footer>
                    </blockquote>
                </div>
            </div>

            <div class="row" style="opacity: 0;">
                <div class="col-md-3 col-sm-3">
                    <img src="{{ asset('img/recaller-3.jpg') }}" class="img-responsive img-circle">
                </div>
                <div class="col-md-8 col-sm-9">
                    <blockquote>
                        <p>Я работаю не далеко от Метро “Таганская”.Доставка из “ПловХаус” всегда быстро и очень вкусно. Спасибо вам большое.</p>
                        <footer>Владимир Сергеев - <cite>12.02.2016</cite></footer>
                    </blockquote>
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="btn btn-xl btn-danger">Оставить свой отзыв</a>
            </div>
        </div>
    </section>

    <section id="contacts">
        <div class="container">
            <div class="text-xl">Контакты и Обратная связь</div>

            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="text-l">Обратная связь</div>
                    <form action="#" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Представьтесь">
                        </div>
                        <div class="form-group">
                            <input type="text" name="contact" id="contact" class="form-control input-lg" placeholder="Ваш Email или телефон">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control input-lg" placeholder="Ваше сообщение" style="height: 250px;"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-block btn-info">Отправить письмо</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-7 col-lg-offset-1 col-md-6 col-md-offset-1">
                    <div class="text-l">Контакты</div>
                    <div class="contacts-phone">+ 7 926 048-35-30</div>
                    <div class="contacts-email">info@domen.name</div>
                    <hr>
                    <div class="contacts-address">Город: Тюмень</div>
                    <div class="contacts-address">Улица: Лесная, дом 12</div>
                </div>
            </div>
        </div>
    </section>

    <section id="map">
        <div class="container-fluid">

        </div>
    </section>
</div>

@include('partials._callback')
@include('partials._flash')
@include('partials._metrika')

@yield('footer_scripts')

</body>
</html>