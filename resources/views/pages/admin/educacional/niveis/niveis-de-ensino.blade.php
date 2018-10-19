@extends('layouts.admin')

@section('content-admin')
    <h2>Níveis de Ensino</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="{{ route('educationlevels.create') }}" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Nível
        </a>
    </div>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($educationLevels as $educationLevel)
                    <tr>
                        <td>{{ $educationLevel->id }}</td>
                        <td>{{ $educationLevel->name }}</td>
                        <td>
                            <a class="btn btn-default" href="{{ route('educationlevels.show', $educationLevel->id) }}" role="button">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>

                            <a class="btn btn-default" href="{{ route('educationlevels.edit', $educationLevel->id) }}" role="button">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>

                            <a class="btn btn-default" href="#" onClick="createWarning('{{ route('educationlevels.destroy', $educationLevel->id) }}');return false;" role="button">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection