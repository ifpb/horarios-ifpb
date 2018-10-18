@extends('layouts.admin')

@section('content-admin')
    <h2>Gerenciamento de Salas</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="{{ route('classroom.create') }}" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Sala
        </a>
    </div>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Abreviação</th>
                    <th>Tipo</th>
                    <th>Capacidade</th>
                    <th>Bloco</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($classrooms as $classroom)
                    <tr>
                        <td>{{ $classroom->id }}</td>
                        <td>{{ $classroom->name  }}</td>
                        <td>{{ $classroom->initials }}</td>
                        <td>{{ $classroom->type->prefix }}</td>
                        <td>{{ $classroom->capacity }}</td>
                        <td><a href="{{ route('blocks.show', $classroom->block->id) }}" target="_blank">{{ $classroom->block->initials }}</a></td>
                        <td>
                            <a class="btn btn-default" href="{{ route('classroom.show', $classroom->id) }}" role="button">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>

                            <a class="btn btn-default" href="{{ route('classroom.edit', $classroom->id) }}" role="button">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>

                            <a class="btn btn-default" href="#" onClick="createWarning('{{ route('classroom.destroy', $classroom->id) }}');return false;" role="button">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection