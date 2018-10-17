@extends('layouts.admin')

@section('content-admin')
    <h2>Cursos</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="/admin/cursos/adicionar" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Curso
        </a>
    </div>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Abreviação</th>
                    <th>Períodos</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Redes de Computadores</td>
                    <td>CST REDES</td>
                    <td>7</td>
                    <td>
                        <a class="btn btn-default" href="/admin/cursos/ver" role="button">
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