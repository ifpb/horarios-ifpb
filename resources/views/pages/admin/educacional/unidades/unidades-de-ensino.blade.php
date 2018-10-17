@extends('layouts.admin')

@section('content-admin')
    <h2>Unidades de Ensino</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="/admin/unidades-de-ensino/adicionar" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Unidade
        </a>
    </div>

    <div class="alert alert-success" role="alert">Nova sala adicionada com sucesso!</div>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Abreviação</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Informação e Comunicação</td>
                    <td>INFO E COM</td>
                    <td>
                        <a class="btn btn-default" href="/admin/unidades-de-ensino/ver" role="button">
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