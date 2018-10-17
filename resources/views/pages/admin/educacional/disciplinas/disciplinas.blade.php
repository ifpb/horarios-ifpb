@extends('layouts.admin')

@section('content-admin')
    <h2>Disciplinas</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="/admin/disciplinas/adicionar" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Disciplina
        </a>
    </div>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Curso</th>
                    <th>Periodo</th>
                    <th>CH</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Administração de Sistemas Abertos</td>
                    <td>CST REDES</td>
                    <td>3</td>
                    <td>87</td>
                    <td>
                        <a class="btn btn-default" href="/admin/disciplinas/ver" role="button">
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
                    <td>Desenvolvimento Web</td>
                    <td>CST REDES</td>
                    <td>4</td>
                    <td>87</td>
                    <td>
                        <a class="btn btn-default" href="/admin/disciplinas/ver" role="button">
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