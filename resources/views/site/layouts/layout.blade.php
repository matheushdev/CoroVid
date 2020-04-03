<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!--[MOBILE]-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[PWA]-->
    <meta name="application-name" content="CoroVid">
    <meta name="theme-color" content="#f1384e">
    <meta name="apple-mobile-web-app-status-bar-style" content="#f1384e">
    <meta name="msapplication-navbutton-color" content="#f1384e">
    <link rel="icon" sizes="192x192" href="{{ secure_url('/assets/img/logo192x192.png') }}">
    <link rel="apple-touch-icon" href="{{ secure_url('/assets/img/logo192x192.png') }}">
    <link rel="shortcut icon" type="image/png href="{{ secure_url('/assets/img/logo144x144.png') }}">
    <link rel="manifest" href="{{ secure_url('/assets/manifest/manifest.json') }}">

    <!--[ICON]-->
    <link rel="icon" href="{{ secure_url('/assets/img/icon.png') }}">

    <!--[META:OG]-->
    <meta property="og:locale" content="pt-BR">
    <meta property="og:url" content="{{ secure_url('') }}'">
    <meta property="og:title" content="CoroVid">
    <meta property="og:site_name" content="CoroVid">
    <meta property="og:description" content="Visualize os casos de corona vírus da região!">
    <meta property="og:image" content="{{ secure_url('/assets/img/icon.png') }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="144">
    <meta property="og:image:height" content="144">

    <!--[META:TWITTER]-->
    <meta name="twitter:title" content="CoroVid">
    <meta name="twitter:description" content="Visualize os casos de corona vírus da região!">
    <meta name="twitter:image" content="{{ secure_url('/assets/img/icon.png') }}">

    <!--[META:AUTHOR]-->
    <meta property="article:author" content="M4theus.dev" href="https://M4theus.dev">
    <meta property="article:section" content="M4theus.dev" href="https://M4theus.me">
    <meta property="article:published_time" content="M4theus.dev" href="https://M4theus.me">

    <!--[META:Keywords]-->
    <meta name="keywords" content="CoroVid, coro vid, coro, vid, coromandel, coro, minas, corona virus, corona virus coromande, covid, covid coromandel, casos em coromandel, casos de corona em coromandel, corona, casos, virus, Coromandel, minas gerais, MG, abadia dos dourados, abadia, dos, dourados, casos de corona virus em abadia, monte carmelo, monte, carmelo, casos de corona virus em monte carmelo, brazil, desenvolvedor, matheus dev, mths.dev, m4theus.dev, m4theus.me, matheus dev, m4theus dev, M4THEUS DEV">
    <meta name="description" content="Visualize os casos de corona vírus da região!">
    <meta name="copyright" content="© CoroVid">

    <!--[LINK:Outros]-->
    <link rel="stylesheet" href="{{ secure_url('assets/css/sweetalert2-dark.css') }}">
    <link rel="stylesheet" href="{{ secure_url('assets/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="{{ secure_url('assets/css/animate.min.css') }}">

    <!--[LINK:Styles]-->
    <link href="{{ secure_url(mix('assets/css/style.css')) }}" rel="stylesheet">




    <title>CoroVid</title>
</head>

<body>

    <!--[MENU:Inicio]-->
    <section class="menu">
        <div class="container">
            <nav class="navbar menu navbar-expand-lg fp ">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarNav"> ☰ </button>
                <img src="{{ secure_url('assets/img/CoroVid.png') }}" class="img-fluid" width="80" alt="CoroVid - Imagem">
                <div class="container">
                    <div class="collapse navbar-collapse wow fadeIn" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item {{ ($pagina == 'index')? 'active' :  '' }}">
                                <a class="nav-link" href="/">
                                    <i class="fas fa-home"></i>   INICIO
                                </a>
                            </li>
                            <li class="nav-item {{ ($pagina == 'contato')? 'active' :  '' }}">
                                <a class="nav-link" href="{{ route('site.contato') }}">
                                    <i class="fas fa-envelope"></i>   CONTATO
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <!--[MENU:Fim]-->
    @yield('content')
    <!--[FOOTER:Inicio]-->
    <section class="footer container">
        <footer>
            <div class="row  wow fadeIn">
                <div class="col-md-6"> © CoroVid - Projeto para visualizar total de casos da COVID-16 no município.
                </div>
                <div class="col-md-6">
                    <span>
                        <i class="fas fa-code"></i>  Desenvolvido com  <i class="far fa-heart"></i>  por  
                        <a href="https://github.com/m4theus-dev/CoroVid" target="_blank">M4theus.dev</a>
                    </span>
                </div>
            </div>
        </footer>
    </section>
    <!--[FOOTER:Fim]-->


    <!--[SCRIPTS:Outros]-->
    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register("{{ secure_url('/assets/manifest/sw.js') }}")
        .then(function () {
            console.log('service worker registrado');
        })
        .catch(function () {
            console.warn('service worker falhou');
        });
    }
    </script>
    <script src="{{ secure_url('assets/js/jquery.js') }}"></script>
    <script src="{{ secure_url('assets/js/sweetalert2.min.js') }}"></script>
    <script src="{{ secure_url('assets/js/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ secure_url('assets/js/wow.js') }}" type="text/javascript"></script>
    <script>
        new WOW().init();
    </script>
    <!--[SCRIPTS:Site]-->
    <script src="{{ secure_url(mix('assets/js/main.js')) }}"></script>
</body>

</html>