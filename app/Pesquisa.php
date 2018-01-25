<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Input;


class Pesquisa extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'Url';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nome',
        'url'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];



/*

    public static function getAllRestaurants ()
    {
        $restaurants = Pesquisa::all();
        $results = [];

        foreach ($restaurants as $restaurant) {
            $client = new Client(); //GuzzleHttp\Client
            $result = $client->get("$restaurant->url/restaurantes");
            foreach (json_decode((string) $result->getBody()) as $response) {
                array_push($results, $response);
            }
        }

    return $results;
    }




    public static function getAllEmentas ()
    {
        $restaurants = Pesquisa::all();
        $results = [];

    foreach ($restaurants as $restaurant) {

            $client = new Client(); //GuzzleHttp\Client
            $result = $client->get("$restaurant->url/ementas");

            foreach (json_decode((string) $result->getBody()) as $response) {
                array_push($results, $response);

            }
        }

        return $results;
    }


    public static function getRestaurants ($searchedValue)
    {

        $restaurants = Pesquisa::all();
        $results = [];

        foreach ($restaurants as $restaurant) {
            $client = new Client(); //GuzzleHttp\Client
            $result = $client->get("$restaurant->url/restaurantes");
                foreach (json_decode((string) $result->getBody()) as $response) {
                array_push($results, $response);
            }

        }

        $neededObject = array_filter(
            $results,
            function ($e) use (&$searchedValue) {
                return strpos($e->nome, $searchedValue) !== false;
            }
        );
    return $neededObject;
    }


    public static function getLocal ($searchedValue)
    {


        $restaurants = Pesquisa::all();
        $results = [];

        foreach ($restaurants as $restaurant) {
            $client = new Client(); //GuzzleHttp\Client
            $result = $client->get("$restaurant->url/restaurantes");
            foreach (json_decode((string) $result->getBody()) as $response) {
                array_push($results, $response);
            }

        }

        $neededObject = array_filter(
            $results,
            function ($e) use (&$searchedValue) {
                return strpos($e->localizacao, $searchedValue) !== false;
            }
        );
        return $neededObject;
    }

    public static function getEmenta($searchedValue)
    {
        $ementas = Pesquisa::all();
        $results = [];

        foreach ($ementas as $ementa) {
            $client = new Client(); //GuzzleHttp\Client
            $result = $client->get("$ementa->url/ementas");
            dd($result->getBody());
            foreach (json_decode((string) $result->getBody()) as $response) {
                array_push($results, $response);
            }

        }

        $neededObject = array_filter(
            $results,
            function ($e) use (&$searchedValue) {
                return strpos($e->ementa, $searchedValue) !== false;
            }
        );
        return $neededObject;
    }


    public static function getTipoComida($searchedValue)
    {

    }

    public static function getClienteDetails ($id)
    {
        return Cliente::find($id);
    }

    public static function getRandomCliente()
    {
        return Cliente::find(rand (1, Cliente::count()))->id;
    }*/
}
