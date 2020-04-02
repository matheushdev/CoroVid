@extends('site.layouts.layout')


@section('content')
<!--[MENU:Inicio]-->
<section class="menu">
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
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 text-tuncate">
                    <div class="card">
                        <div class="titulo">{{ $dados["cidade"]["coromandel"]["nome_cidade"] }}</div>
                        <div class="infos">
                            <div class="row inf2">
                                <div class="col">Casos Suspeitos:</div>
                                <div class="col-auto count">{{ $dados["cidade"]["coromandel"]["casos_suspeitos"] }}</div>
                            </div>
                            <hr class="hr2">
                            <div class="row inf2">
                                <div class="col">Casos Confirmados:</div>
                                <div class="col-auto count">{{ $dados["cidade"]["coromandel"]["casos_confirmados"] }}</div>
                            </div>
                            <hr class="hr2">
                            <div class="row inf2">
                                <div class="col">Casos Descartados:</div>
                                <div class="col-auto count">{{ $dados["cidade"]["coromandel"]["casos_descartados"] }}</div>
                            </div>
                            <hr class="hr2">
                            <div class="row inf2">
                                <div class="col">Pacientes em Isolamento Domiciliar:</div>
                                <div class="col-auto count">{{ $dados["cidade"]["coromandel"]["pacientes_isolamento_domiciliar"] }}</div>
                            </div>
                            <hr class="hr2">
                            <div class="row inf2">
                                <div class="col">Exames Coletados:</div>
                                <div class="col-auto count">{{ $dados["cidade"]["coromandel"]["exames_coletados"] }}</div>
                            </div>
                            <hr class="hr2">
                            <div class="row inf2">
                                <div class="col">Pacientes Internados:</div>
                                <div class="col-auto count">{{ $dados["cidade"]["coromandel"]["pacientes_internados"] }}</div>
                            </div>
                            <hr class="hr2">
                            <div class="row inf2">
                                <div class="col">Sairam do Isolamento Domiciliar:</div>
                                <div class="col-auto count">{{ $dados["cidade"]["coromandel"]["sairam_do_isolamento_domiciliar"] }}</div>
                            </div>
                            <hr class="hr2">
                            <div class="row inf2">
                                <div class="col">Pacientes Internados em Uberlandia:</div>
                                <div class="col-auto count">{{ $dados["cidade"]["coromandel"]["pacientes_internados_em_uberlandia"] }}</div>
                            </div>
                            <hr class="hr2">
                        </div>
                        <div class="footer">
                            <div class="row inf2">
                                <div class="col">Atualizado em <e>{{ $dados["cidade"]["coromandel"]["data"] }}</e>. </div>
                                <div class="col-auto">Fonte: <a href="{{ $dados["cidade"]["coromandel"]["fonte_link"] }}" target="_blank" >{{ $dados["cidade"]["coromandel"]["fonte_nome"] }}</a>. </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-tuncate">
                    <div class="card">
                        <div class="titulo">{{ $dados["cidade"]["abadia_dos_dourados"]["nome_cidade"] }}</div>
                        <div class="infos">
                            <div class="row inf2">
                                <div class="col">Casos Suspeitos:</div>
                                <div class="col-auto count">{{ $dados["cidade"]["abadia_dos_dourados"]["casos_suspeitos"] }}</div>
                            </div>
                            <hr class="hr2">
                            <div class="row inf2">
                                <div class="col">Casos Confirmados:</div>
                                <div class="col-auto count">{{ $dados["cidade"]["abadia_dos_dourados"]["casos_confirmados"] }}</div>
                            </div>
                            <hr class="hr2">
                            <div class="row inf2">
                                <div class="col">Casos Descartados:</div>
                                <div class="col-auto count">{{ $dados["cidade"]["abadia_dos_dourados"]["casos_descartados"] }}</div>
                            </div>
                            <hr class="hr2">
                            <div class="row inf2">
                                <div class="col">Pacientes em Isolamento Domiciliar:</div>
                                <div class="col-auto count">{{ $dados["cidade"]["abadia_dos_dourados"]["pacientes_isolamento_domiciliar"] }}</div>
                            </div>
                            <hr class="hr2">
                            <div class="row inf2">
                                <div class="col">Exames Coletados:</div>
                                <div class="col-auto count">{{ $dados["cidade"]["abadia_dos_dourados"]["exames_coletados"] }}</div>
                            </div>
                            <hr class="hr2">
                            <div class="row inf2">
                                <div class="col">Pacientes Internados:</div>
                                <div class="col-auto count">{{ $dados["cidade"]["abadia_dos_dourados"]["pacientes_internados"] }}</div>
                            </div>
                            <hr class="hr2">
                            <div class="row inf2">
                                <div class="col">Sairam do Isolamento Domiciliar:</div>
                                <div class="col-auto count">{{ $dados["cidade"]["abadia_dos_dourados"]["sairam_do_isolamento_domiciliar"] }}</div>
                            </div>
                            <hr class="hr2">
                            <div class="row inf2">
                                <div class="col">Pacientes Internados em Uberlandia:</div>
                                <div class="col-auto count">{{ $dados["cidade"]["abadia_dos_dourados"]["pacientes_internados_em_uberlandia"] }}</div>
                            </div>
                            <hr class="hr2">
                        </div>
                        <div class="footer">
                            <div class="row inf2">
                                <div class="col">Atualizado em <e>{{ $dados["cidade"]["abadia_dos_dourados"]["data"] }}</e>. </div>
                                <div class="col-auto">Fonte: <a href="{{ $dados["cidade"]["abadia_dos_dourados"]["fonte_link"] }}" target="_blank" >{{ $dados["cidade"]["coromandel"]["fonte_nome"] }}</a>. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                    <i class="fas fa-code"></i>  Desenvolvido com  <i class="far fa-heart"></i>  por  <a
                        href="https://github.com/m4theus-dev/">M4theus.dev</a>
                </span>
            </div>
        </div>
    </footer>
</section>
<!--[FOOTER:Fim]-->
@endsection