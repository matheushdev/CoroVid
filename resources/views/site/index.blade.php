@extends('site.layouts.layout')


@section('content')
<!--[MENU:Inicio]-->
<section>
    <div class="container">
        <nav class="navbar menu navbar-expand-lg fp">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarNav"> ☰ </button>
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">
                                INICIO
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>
<!--[MENU:Fim]-->






<!--[CONTEUDO:Inicio]-->
<div class="container">
    <div class="conteudo">
        Salve caraiooo
    </div>
</div>
<!--[CONTEUDO:Fim]-->






<!--[FOOTER:Inicio]-->
<section class="footer container">
    <footer>
        <div class="row">
            <div class="col-md-6"> © CoroVid - Projeto para visualizar total de casos da COVID-16 no município.</div>
            <div class="col-md-6">
                <span>
                    <i class="fas fa-code"></i>  Desenvolvido com  <i class="far fa-heart"></i>  por  <a href="https://github.com/m4theus-dev/">M4theus.dev</a>
                </span>
            </div>
        </div>
    </footer>
</section>
<!--[FOOTER:Fim]-->
@endsection