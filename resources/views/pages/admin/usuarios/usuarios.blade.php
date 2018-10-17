@extends('layouts.admin')

@section('content-admin')
    <h2>Usuários do Sistema</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="/admin/usuarios/adicionar" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Usuário
        </a>
    </div>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Luiz Carlos</td>
                    <td>Professor do DTI</td>
                    <td>
                        <a class="btn btn-default" href="/admin/usuarios/ver" role="button">
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