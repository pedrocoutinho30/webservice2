@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div style="text-align: center;">
                        <a class="btn btn-primary" href="/show-all">Mostrar todos os Restaurants</a>
                    </div>
                    <form action="pesquisarController" method="get">

                    <div style="text-align: center;">Filtros:</div>
                        <div style="text-align: center;">Nome Restaurante:<input type="text" name="nomeRest"></div>
                        <div style="text-align: center;">
                            <a class="btn btn-primary" href="/show-rest">Pesquisar</a>
                        </div>
                        <p> <center>Localização: <input type="text" name="local"></center></p>
                        <p> <center>Preço: <input type="text" name="preco"></center></p>
                        <p> <center>Ementa: <input type="text" name="ementa"></center></p>
                        <p> <center>Tipo de Comida: <input type="text" name="tipoComida"  ></center></p>
                        <p> <center>Horario de Funcionamento:<input type="text" name="horario"> </center></p>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
