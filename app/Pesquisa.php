<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

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

    public function pesquisar()
    {
        $nomeRest = Input::get('nomeRest');
        $local = Input::get('local');
        $preco = Input::get('preco');
        $ementa = Input::get('ementa');
        $tipoComida = Input::get('tipoComida');
        $horario = Input::get('horario');

/*
        $pesquisa = Produtos::where('erp_status', 'like', '%' . $status . '%')
            ->orWhere('erp_cost', 'like', '%' . $texto . '%')
            ->orWhere('erp_productid', 'like', '%' . $texto . '%')
            ->orWhereHas('descricao', function ($query) use ($texto) {
                $query->where('erp_name', 'like', '%' . $texto . '%');
            })
            ->orderBy('erp_status')
            ->paginate(20);
*/
    }

    public static function getUrl(Request $request){
        $restaurant = Restaurant::find($request->input('nome'));
        $restaurant->name = $request->input('nome');
        $restaurant->localizacao=$request->input('localizacao');
        $restaurant->longitude=$request->input('longitude');
        $restaurant->latitude = $request->input('latitude');
        $restaurant->capacidade=$request->input('capacidade');
        $restaurant->horario=$request->input('horario');
        return 'http://projetoengenharia3.localhost';
    }

//http://projetoengenharia.localhost
    public static function getAllRestaurants ()
    {
        $restaurants = Pesquisa::all();
        $results = [];

        foreach ($restaurants as $restaurant) {
            $client = new Client(); //GuzzleHttp\Client
            $result = $client->get("$restaurant->url/restaurants");

            foreach (json_decode((string) $result->getBody()) as $response) {
                array_push($results, $response);
            }
        }
    return $results;
    }

    public static function getRestaurants ()
    {
        $restaurants = Pesquisa::all();
        $results = [];

        foreach ($restaurants as $restaurant) {
            $client = new Client(); //GuzzleHttp\Client
            $result = $client->get("$restaurant->url/restaurants");

            foreach (json_decode((string) $result->getBody()) as $response) {
                array_push($results, $response);
            }
        }

        $searchedValue = 'Presto';

        $neededObject = array_filter(
            $results,
            function ($e) use (&$searchedValue) {
                return strpos($e->name, $searchedValue) !== false;
            }
        );

        //var_dump($neededObject);

        return $neededObject;
    }

    public static function getClienteDetails ($id)
    {
        return Cliente::find($id);
    }

    public static function getRandomCliente()
    {
        return Cliente::find(rand (1, Cliente::count()))->id;
    }


}
