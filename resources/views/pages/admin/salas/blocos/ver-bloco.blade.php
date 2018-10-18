@extends('layouts.admin')

@section('content-admin')
    <h2>Bloco de Informática</h2>

    <a class="btn btn-default mb-5" href="#" onClick="createWarning('#');return false;" role="button">
        <span class="glyphicon glyphicon-minus"></span>
        Remover Bloco
    </a>

    <form>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" value="Bloco de Informática" disabled>
        </div>
        <div class="form-group">
            <label for="">Abreviação</label>
            <input type="text" class="form-control" value="BLOCO INFO" disabled>
        </div>
        <div class="form-group">
            <label for="">Localização</label>
            <input type="text" class="form-control" value="Por trás do ginásio" disabled>
        </div>
    </form>

    <h2>Salas</h2>
    <hr>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Abreviação</th>
                <th>Tipo</th>
                <th>Capacidade</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Informática 28 - Conforto Ambiental</td>
                <td>INFO 28</td>
                <td>Sala</td>
                <td>0</td>
                <td>
                    <a class="btn btn-default" href="/admin/salas/ver" role="button">
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>Laboratório 06</td>
                <td>LAB 06</td>
                <td>Lab</td>
                <td>30</td>
                <td>
                    <a class="btn btn-default" href="#" role="button">
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection