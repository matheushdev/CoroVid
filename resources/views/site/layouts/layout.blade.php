<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!--[MOBILE]-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[GOOGLE:Tag]-->
    <script data-ad-client="ca-pub-7375550308523085" async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162908989-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-162908989-1');
    </script>


    <!--[PWA]-->
    <meta name="application-name" content="CoroVid">
    <meta name="theme-color" content="#d80404">
    <meta name="apple-mobile-web-app-status-bar-style" content="#d80404">
    <meta name="msapplication-navbutton-color" content="#d80404">
    <link rel="icon" sizes="192x192" href="/assets/img/logo192x192.png">
    <link rel="apple-touch-icon" href="/assets/img/logo192x192.png">
    <link rel="shortcut icon" type="image/png" href="/assets/img/logo144x144.png">
    <link rel="manifest" href="/manifest.json">

    <!--[ICON]-->
    <link rel="icon" href="/assets/img/icon.png">

    <!--[META:OG]-->
    <meta property="og:locale" content="pt-BR">
    <meta property="og:url" content="{{ url('') }}">
    <meta property="og:title" content="CoroVid">
    <meta property="og:site_name" content="CoroVid">
    <meta property="og:description" content="Visualize os casos de corona vírus da região!">
    <meta property="og:image" content="/assets/img/icon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="144">
    <meta property="og:image:height" content="144">

    <!--[META:TWITTER]-->
    <meta name="twitter:title" content="CoroVid">
    <meta name="twitter:description" content="Visualize os casos de corona vírus da região!">
    <meta name="twitter:image" content="/assets/img/icon.png">

    <!--[META:AUTHOR]-->
    <meta property="article:author" content="M4theus.dev" href="https://M4theus.dev">
    <meta property="article:section" content="M4theus.dev" href="https://M4theus.me">
    <meta property="article:published_time" content="M4theus.dev" href="https://M4theus.me">

    <!--[META:Keywords]-->
    <meta name="keywords"
        content="CoroVid, coro vid, coro, vid, coromandel, coro, minas, corona virus, corona virus coromande, covid, covid coromandel, casos em coromandel, casos de corona em coromandel, corona, casos, virus, Coromandel, minas gerais, MG, abadia dos dourados, abadia, dos, dourados, casos de corona virus em abadia, monte carmelo, monte, carmelo, casos de corona virus em monte carmelo, brazil, desenvolvedor, matheus dev, mths.dev, m4theus.dev, m4theus.me, matheus dev, m4theus dev, M4THEUS DEV">
    <meta name="description" content="Visualize os casos de corona vírus da região!">
    <meta name="copyright" content="© CoroVid">

    <!--[LINK:Outros]-->
    <link rel="stylesheet" href="assets/css/sweetalert2-dark.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <script src="assets/js/sweetalert2.min.js"></script>

    <!--[LINK:Styles]-->
    <link href="assets/css/style.css" rel="stylesheet">




    <title>CoroVid - {{ $pagina ?? 'Inicio' }}</title>
</head>

<body>

    <!--[MENU:Inicio]-->
    <section class="menu">
        <div class="container">
            <nav class="navbar menu navbar-expand-lg fp ">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarNav"> ☰ </button>
                <img src="assets/img/CoroVid.png" class="img-fluid" width="80" alt="CoroVid - Imagem">
                <div class="container">
                    <div class="collapse navbar-collapse wow fadeIn" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item {{ ($pagina == 'Inicio')? 'active' :  '' }}">
                                <a class="nav-link" href="/">
                                    <i class="fas fa-home"></i>   INICIO
                                </a>
                            </li>
                            <li class="nav-item {{ ($pagina == 'Contato')? 'active' :  '' }}">
                                <a class="nav-link" href="{{ route('site.contato') }}">
                                    <i class="fas fa-envelope"></i>   CONTATO
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item {{ ($pagina == 'Contato')? 'active' :  '' }}">
                                <a class="nav-link" href="{{ route('site.contato') }}">
                                    <i class="fas fa-info-circle"></i>   Informações
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
            <div class="social">
                <p>
                    <a href="https://github.com/m4theus-dev/CoroVid" target="_blank" data-toggle="tooltip" data-placement="top" title="Visualizar projeto.">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://wa.me/553492329818?text=Quero entrar em contato" target="_blank" data-toggle="tooltip" data-placement="top" title="Entrar em contato pelo Whatsapp.">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="https://www.instagram.com/m4theus.dev/" target="_blank" data-toggle="tooltip" data-placement="top" title="Meu Instagram.">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com/m4theus_dev" target="_blank"data-toggle="tooltip" data-placement="top" title="Meu Twitter.">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.facebook.com/m4theus.dev/" target="_blank" data-toggle="tooltip" data-placement="top" title="Meu Facebook.">
                        <i class="fab fa-facebook"></i>
                    </a>
                </p>
            </div>
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6"> © CoroVid - Projeto para visualizar total de casos da COVID-19 no município.
                    </div>
                    <div class="col-md-6">
                        <span>
                            <i class="fas fa-code"></i>  Desenvolvido com  <i class="far fa-heart"></i>  por  
                            <a href="https://github.com/m4theus-dev/CoroVid" target="_blank">M4theus.dev</a>
                        </span>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <!--[FOOTER:Fim]-->

    <!--[Publicidade:Inicio]-->
    {{--  <div class="container publi wow fadeIn">
        <div class="row">
            <div class="col-md-4">
                <a href="/contato" target="_blank">
                    <div class="card">
                        <img src="/assets/img/publi.png" alt="">
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/contato" target="_blank">
                    <div class="card">
                        <img src="/assets/img/publi.png" alt="">
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/contato" target="_blank">
                    <div class="card">
                        <img src="/assets/img/publi.png" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>  --}}
    <!--[Publicidade:Fim]-->


    <!--[SCRIPTS:Outros]-->
    {{--  <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/sw2.js')
                .then(function () {
                    console.log('\n[+] ServiceWorker Registrado!\n');
                })
                .catch(function () {
                    console.warn('\n[!] ServiceWorker Falhou!\n');
                });
        }
    </script>  --}}
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap/bootstrap.js"></script>
    <script src="/assets/js/wow.js" type="text/javascript"></script>
    <script>
        new WOW().init();
    </script>
    <!--[SCRIPTS:Site]-->
    <script src="/assets/js/main.js"></script>
</body>

</html>