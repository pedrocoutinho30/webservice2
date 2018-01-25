@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row text-center">
                            <h4>Filtros</h4>
                        </div>
                    </div>
                    <div>
                        <table class="table">
                            <tr>
                                <td>
                                    <form method="get" action="/allRest">
                                        <input name="submit" type="submit" class="btn btn-primary" value="Restaurante">
                                    </form>

                                </td>
                                <td>
                                    <form method="get" action="/filtro">
                                    <label for="nomeRest">Nome Restaurante:</label>
                                    <input type="text" name="nomeRest"><br>
                                        <label for="ementa">Ementa:</label>
                                        <input type="text" name="ementa"><br>
                                        <label for="horario">Horário:</label>
                                        <input type="text" name="horario"><br>
                                        <label for="local">Local Restaurante:</label>
                                        <input type="text" name="local"><br>
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                                    <input name="submit" type="submit" class="btn btn-primary" value="Pesquisar">
                                    </form>
                                    <form method="get" action="/reservar">
                                        <label for="ementa">Ementa ID:</label>
                                        <input type="text" name="ementaId"><br>
                                        <label for="ementa">Cliente ID:</label>
                                        <input type="text" name="clienteIdhomevol"><br>
                                        <label for="nomeRest">Nome Restaurante:</label>
                                        <input type="text" name="nomeRest"><br>
                                        <label for="horario">Horário:</label>
                                        <input type="text" name="horario"><br>
                                        <label for="local">Número Ocupantes:</label>
                                        <input type="text" name="nOcupantes"><br>
                                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                                        <input name="submit" type="submit" class="btn btn-primary" value="Reservar">
                                    </form>
                                </td>
                                <td>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
