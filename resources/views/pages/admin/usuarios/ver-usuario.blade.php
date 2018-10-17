@extends('layouts.admin')

@section('content-admin')
    <h2>Usuário: Luiz Carlos Chaves</h2>

    <a class="btn btn-default mb-5" href="#" onClick="createWarning('#');return false;" role="button">
        <span class="glyphicon glyphicon-edit"></span>
        Editar Usuário
    </a>

    <a class="btn btn-default mb-5" href="#" onClick="createWarning('#');return false;" role="button">
        <span class="glyphicon glyphicon-minus"></span>
        Remover Usuário
    </a>

    <form>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label for="">Descrição</label>
            <input type="text" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label for="">E-mail</label>
            <input type="email" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label for="">Telefone</label>
            <input type="text" class="form-control" disabled>
        </div>
    </form>

    <hr>
    <h2 class="mb-3">Logs</h2>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
            <tr>
                <th>Id</th>
                <th>Ação</th>
                <th>Data e Hora</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Removeu o curso: Redes de Computadores</td>
                <td>Ontem às 19:40</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Adicionou o curso: Redes de Computadores</td>
                <td>Hoje às 13:22</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection