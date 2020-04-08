<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Mail\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{


    public function __construct(Request $request)
    {
        //
    }

    public function getDadosMunicipio()
    {
        $server = file_get_contents("API/index.json");
        $info = json_decode($server, true);
        return $info;
    }

    public function getDadosBrazil()
    {
        $server = file_get_contents("https://api.covidzero.com.br/data_api/v1/cases/state/report");
        $info = json_decode($server, true);
        return $info;
    }



    public function index()
    {
        $dadosMunicipio = $this->getDadosMunicipio();
        $dadosBrazil = $this->getDadosBrazil();
        $data = date('d/m/Y H:i');
        return view('site.index', [
            "dados" => $dadosMunicipio,
            "dadosBrazil" => $dadosBrazil,
            "pagina" => 'Inicio',
            "data" => $data
        ]);
    }


    // CONTATO
    public function contato(Request $request)
    {
        return view('site.contato', [
            "pagina" => 'Contato'
        ]);
    }

    public function enviaEmail(Request $request)
    {
        $validacao = $request->validate([
            'mensagem' => 'required',
            'email' => 'required|email',
            'assunto' => 'required',
            'mensagem' => 'required',
        ]);

        $nome = $request->nome;
        $email = $request->email;
        $assunto = $request->assunto;
        $mensagem = $request->mensagem;

        Mail::to('matheushenrique_cunha@hotmail.com')->send(new Contato($nome, $email, $assunto, $mensagem));
        $request->session()->flash('alert-success', 'Sua mensagem foi enviada, obrigado!');
        return redirect()->back();
    }




    public function offline()
    {
        return view('site.offline', [
            "pagina" => 'Offline'
        ]);
    }


    
    public function informacoes()
    {
        return view('site.informacoes', [
            "pagina" => 'Informações'
        ]);
    }
}
