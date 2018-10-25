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
                @foreach($logs as $log)
                    <tr>
                        <td>{{ $log->id }}</td>
                        <td>{{ $log->user->name }}</td>
                        <td>{{ $log->action }}</td>
                        <td>{{ $log->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection