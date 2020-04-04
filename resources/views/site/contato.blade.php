@extends('site.layouts.layout')


@section('content')

<!--[CONTEUDO:Inicio]-->
<div class="container">
  <div class="conteudo">
    <div class="row">
      <div class="col-md-10">
        <div class="contato-form">
          <form action="{{ route('site.contato.enviaemail') }}" method="POST">
            @csrf

            <div class="form-row">
              <div class="col-md-6">
                <label for="colFormLabelSm" class="col-sm-6 col-form-label col-form-label-sm">•  Nome Completo</label>
                <input type="text" name="nome" class="form-control" placeholder="Seu nome." value="{{ old('nome') }}"
                  required>
              </div>
              <div class="col-md-6">
                <label for="colFormLabelSm" class="col-sm-6 col-form-label col-form-label-sm">•  Email</label>
                <input type="email" name="email" class="form-control" placeholder="Seu email."
                  value="{{ old('email') }}" required>
              </div>
              <div class="col-md-12">
                <label for="colFormLabelSm" class="col-sm-6 col-form-label col-form-label-sm">•  Assunto</label>
                <input type="text" name="assunto" class="form-control" placeholder="Assunto."
                  value="{{ old('assunto') }}" required>
              </div>
              <div class="col-md-12">
                <label for="colFormLabelSm" class="col-sm-6 col-form-label col-form-label-sm">•  Mensagem</label>
                <textarea name="mensagem" placeholder="Mensagem..." rows="5" required>{{ old('mensagem') }}</textarea>
              </div>
              <div class="col-md-12">
                <input type="submit" value="ENVIAR">
              </div>

              @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                <div class="col-md-12">
                  <script>
                    swal.fire({ 
                      title: 'Sucesso!',
                      html: '<p style="font-size:20px;">Sua mensagem foi enviada, em breve entrarei em contato com você</p>' +
                            '<br><p style="font-size:18px;color:red;margin-bottom:-25px;">Obrigado pelo contato!<p>',
                      icon: 'success',
                      confirmButtonText: "Ok",
                      confirmButtonColor: '#1bcc00',
                      });
                  </script>
                  <div
                    class="alert fade alert-simple alert-{{ $msg }} alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                    <button type="button" class="close font__size-18" data-dismiss="alert">
                      <span aria-hidden="true">
                        <i class="fa fa-times greencross"></i>
                      </span>
                      <span class="sr-only">Fechar</span>
                    </button>
                    <i class="start-icon far fa-check-circle faa-tada animated"></i>
                    <strong class="font__weight-semibold">{{ Session::get('alert-' . $msg) }}</strong>
                  </div>

                </div>
                @endif
              @endforeach
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-2">
        <div class="contato-pessoal">
          <a target="_blank" href="https://www.facebook.com/M4THEUS.dev"><i class="fab fa-facebook-square"></i>  -  Facebook</a> <br>
          <a target="_blank" href="https://github.com/m4theus-dev/"><i class="fab fa-github-square"></i>  -  GitHub</a> <br>
          <a target="_blank" href="https://linkedin.com/in/matheus-henrique-b918451a5/"><i class="fab fa-linkedin"></i>  -  Linkedin</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--[CONTEUDO:Fim]-->

@endsection