<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dadosMunicipio = $this->getDadosMunicipio();
        $dadosBrazil = $this->getDadosBrazil();
        $data = date('d/m/Y H:i');
        return view('site.index', [
            "dados" => $dadosMunicipio,
            "dadosBrazil" => $dadosBrazil,
            "pagina" => 'index',
            "data" => $data
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contato()
    {
        return view('site.contato', [
            "pagina" => 'contato'
        ]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
