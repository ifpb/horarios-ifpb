@extends('layouts.admin')

@section('content-admin')
    <h2>Professores</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="/admin/professores/adicionar" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Professor
        </a>
    </div>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Apelido</th>
                    <th>Ativo</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Luiz Carlos Chaves</td>
                    <td>Luiz Carlos</td>
                    <td>Sim</td>
                    <td>
                        <a class="btn btn-default" href="/admin/professores/ver" role="button">
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