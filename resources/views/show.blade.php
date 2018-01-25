@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row text-center">
                            <h4>Show Restaurante</h4>
                        </div>
                    </div>

                    <table class="table">
                        <tr>
                            <td>Nome do Restaurante</td>
                            <td>Localização</td>
                            <td>Latitude</td>
                            <td>Longitude</td>
                            <td>Capacidade</td>
                            <td>Horário</td>
                        </tr>
                        <?php

                        foreach ($restaurantes as $resaurante){
                        ?>
                        <tr>
                            <td><?php echo $resaurante->id ?></td>
                            <td><?php echo $resaurante->nome ?></td>
                            <td><?php echo $resaurante->localizacao ?></td>
                            <td><?php echo $resaurante->latidude ?></td>
                            <td><?php echo $resaurante->longiude ?></td>
                            <td><?php echo $resaurante->horario ?></td>
                            <td><?php echo $resaurante->capacidade ?></td>
                        </tr>
                        <?php }?>

                    </table>
                        <div class="row text-center">
                            Ementas
                        </div>

                    <table class="table">
                        <tr>
                            <td>Ementa</td>
                            <td>Tipo Comida</td>
                            <td>Preço</td>
                        </tr>
                        <tr>
                            </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
