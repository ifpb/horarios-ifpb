@extends('layouts.admin')

@section('content-admin')
    <h2>Informação e Comunicação</h2>

    <a class="btn btn-default mb-5" href="#" onClick="createWarning('#');return false;" role="button">
        <span class="glyphicon glyphicon-minus"></span>
        Remover Unidade
    </a>

    <form>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" value="Informação e Comunicação" disabled>
        </div>
        <div class="form-group">
            <label for="">Abreviação</label>
            <input type="text" class="form-control" value="INFO E COM" disabled>
        </div>
    </form>

    <hr />
    <h2 class="mb-3">Cursos</h2>

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
                <td>Redes de Computadores</td>
                <td>CST REDES</td>
                <td>
                    <a class="btn btn-default" href="/admin/cursos/ver" role="button">
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <hr />
    <h2 class="mb-3">Professores</h2>

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
                <td>José Quaresma Filho</td>
                <td>Zé Filho</td>
                <td>
                    <a class="btn btn-default" href="/admin/professores/ver" role="button">
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection