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
    public function getRestaurants()
    {
        return response()->json(Pesquisa::getRestaurants());
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

}
