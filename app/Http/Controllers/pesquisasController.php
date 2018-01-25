<?php

namespace App\Http\Controllers;

use App\Pesquisa;
use Illuminate\Http\Request;


class pesquisasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function show(){
        return view('show');
    }

    public function getRestaurants(Request $request)
    {
        $nome=$request->input('nomeRest');
        return response()->json(Pesquisa::getRestaurants($nome));
    }

    public function getLocal(Request $request)
    {
        $nome=$request->input('localRest');
        return response()->json(Pesquisa::getLocal($nome));
    }
    public function getEmenta(Request $request)
    {
        $ementa=$request->input('ementa');

        return response()->json(Pesquisa::getEmenta($ementa));
    }

    public function getFiltro(Request $request)
    {
        $nome = $request->input('nomeRest');
        $ementa = $request->input('ementaRest');
        $localizacao = $request->input('localRest');
        $tipoComida = $request->input('tipoComida');
        if ($ementa == null and $localizacao == null and $tipoComida==null) {
            return response()->json(Pesquisa::getRestaurants($nome));
        }else if ($nome == null and $localizacao == null and $tipoComida==null) {
            return response()->json(Pesquisa::getEmenta($ementa));
        }else if ($nome == null and $ementa == null and $tipoComida==null) {
            return response()->json(Pesquisa::getLocal($localizacao));
        }else if ($nome == null and $ementa == null and $localizacao==null) {
            return response()->json(Pesquisa::getTipoComida($tipoComida));
        }
    }

    public function getReserva(Request $request){
        $nomeRest= $request->input('nome');
        $nClientes = $request->input('nClientes');
        $ementaId = $request->input('ementaId');
        $clienteId = $request->input('clienteId');
        $hora = $request->input('hora');

        return response()->json(Pesquisa::reserva($nomeRest, $nClientes, $ementaId, $clienteId, $hora));
    }


    public function  getTipoComida(Request $request){
        $tipoComida = $request->input('tipoComida');
        return response()->json(Pesquisa::getTipoComida($tipoComida));
    }
    /**
     * Return all saved restaurants
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllRestaurants()
    {
        return response()->json(Pesquisa::getAllRestaurants());
    }

    public function getAllEmentas()
    {
        return response()->json(Pesquisa::getAllEmentas());


    }
}
