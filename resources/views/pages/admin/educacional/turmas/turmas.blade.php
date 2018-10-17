@extends('layouts.admin')

@section('content-admin')
    <h2>Turmas</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="/admin/turmas/adicionar" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Turma
        </a>
    </div>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
                <tr>
                    <th>Disciplina</th>
                    <th>Professor</th>
                    <th>Ident.</th>
                    <th>Sala Reservada?</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Administração de Sistemas Abertos</td>
                    <td>José Quaresma Filho</td>
                    <td>U</td>
                    <td>Não</td>
                    <td>
                        <a class="btn btn-default" href="/admin/turmas/ver" role="button">
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
                    <td>José Quaresma Filho</td>
                    <td>U</td>
                    <td>Sim</td>
                    <td>
                        <a class="btn btn-default" href="/admin/turmas/ver" role="button">
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