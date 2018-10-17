@extends('layouts.admin')

@section('content-admin')
    <h2>Logs do sistema</h2>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
            <tr>
                <th>Id</th>
                <th>Usuário</th>
                <th>Ação</th>
                <th>Data e Hora</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Luiz Carlos</td>
                <td>Removeu o curso: Redes de Computadores</td>
                <td>Ontem às 19:40</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Luiz Carlos</td>
                <td>Adicionou o curso: Redes de Computadores</td>
                <td>Hoje às 13:22</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection