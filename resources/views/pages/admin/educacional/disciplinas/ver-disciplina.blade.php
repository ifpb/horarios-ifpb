@extends('layouts.admin')

@section('content-admin')
    <h2>Administração de Sistemas Abertos</h2>

    <a class="btn btn-default mb-5" href="#" onClick="createWarning('#');return false;" role="button">
        <span class="glyphicon glyphicon-minus"></span>
        Remover Disciplina
    </a>

    <form>
        <div class="form-group">
            <label for="">Disciplina</label>
            <select class="form-control" disabled>
                <option value="">Redes de Computadores</option>
                <option value="">Design de Interiores</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label for="">Período</label>
            <input type="text" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label for="">Carga Horária</label>
            <input type="text" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label for="">Aulas</label>
            <input type="text" class="form-control" disabled>
        </div>
    </form>

    <hr>
    <h2 class="mb-3">Turmas</h2>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Periodo</th>
                <th>CH</th>
                <th>Num Aulas</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Administração de Sistemas Abertos</td>
                <td>3</td>
                <td>87</td>
                <td>
                    <a class="btn btn-default" href="/admin/disciplinas/ver" role="button">
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>Desenvolvimento Web</td>
                <td>4</td>
                <td>87</td>
                <td>
                    <a class="btn btn-default" href="/admin/disciplinas/ver" role="button">
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection