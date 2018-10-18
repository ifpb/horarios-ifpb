@extends('layouts.admin')

@section('content-admin')
    <h2>Gerenciamento de Blocos</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="/admin/blocos/adicionar" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Bloco
        </a>
    </div>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Abreviação</th>
                    <th>Salas</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Bloco de Informática</td>
                    <td>BLOCO INFO</td>
                    <td>15</td>
                    <td>
                        <a class="btn btn-default" href="/admin/blocos/ver" role="button">
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