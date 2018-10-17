@extends('layouts.admin')

@section('content-admin')
    <h2>Nível: Integrado</h2>

    <a class="btn btn-default mb-5" href="#" onClick="createWarning('#');return false;" role="button">
        <span class="glyphicon glyphicon-minus"></span>
        Remover Nível
    </a>

    <form>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" value="Integrado" disabled>
        </div>
    </form>

    <hr>
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
@endsection