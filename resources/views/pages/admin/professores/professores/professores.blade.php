@extends('layouts.admin')

@section('content-admin')
    <h2>Professores</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="{{ route('professors.create') }}" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Professor
        </a>
    </div>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Apelido</th>
                    <th>Ativo</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($professors as $professor)
                    <tr>
                        <td>{{ $professor->id }}</td>
                        <td>{{ $professor->name }}</td>
                        <td>{{ $professor->nickname }}</td>
                        <td>@if($professor->active) Sim @else Não @endif</td>
                        <td>
                            <a class="btn btn-default" href="{{ route('professors.show', $professor->id) }}" role="button">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>

                            <a class="btn btn-default" href="{{ route('professors.edit', $professor->id) }}" role="button">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>

                            <a class="btn btn-default" href="#" onClick="createWarning('{{ route('professors.destroy', $professor->id) }}');return false;" role="button">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection