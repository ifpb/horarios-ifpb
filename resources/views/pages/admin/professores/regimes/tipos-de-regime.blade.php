@extends('layouts.admin')

@section('content-admin')
    <h2>Tipos de Regime</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="/admin/professores/regimes/adicionar" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Tipo de Regime
        </a>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Efetivo</td>
                    <td>
                        <a class="btn btn-default" href="/admin/professores/regimes/ver" role="button">
                            <span class="glyphicon glyphicon-eye-open"></span>
                        </a>

                        <a class="btn btn-default" href="#" role="button">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>

                        <a class="btn btn-default" href="#" onClick="createWarning('#');return false;" role="button">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>Temporário</td>
                    <td>
                        <a class="btn btn-default" href="/admin/professores/regimes/ver" role="button">
                            <span class="glyphicon glyphicon-eye-open"></span>
                        </a>

                        <a class="btn btn-default" href="#" role="button">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>

                        <a class="btn btn-default" href="#" onClick="createWarning('#');return false;" role="button">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection