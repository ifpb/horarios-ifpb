@extends('layouts.admin')

@section('content-admin')
    <h2>Bloco: {{ $block->name }}</h2>

    <a class="btn btn-default mb-5" href="{{ action('BlockController@edit', [ 'id' => $block->id ]) }}" role="button">
        <span class="glyphicon glyphicon-edit"></span>
        Editar Bloco
    </a>

    <a class="btn btn-danger mb-5" href="#" onClick="createWarning('{{ action('BlockController@destroy', [ 'id' => $block->id ]) }}');return false;" role="button">
        <span class="glyphicon glyphicon-remove"></span>
        Remover Bloco
    </a>

    <form>
        <div class="form-group">
            <label for="block">Nome</label>
            <input type="text" id="block" class="form-control" value="{{ $block->name }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Abreviação</label>
            <input type="text" class="form-control" value="{{ $block->initials }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Localização</label>
            <input type="text" class="form-control" value="{{ $block->location }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Salas</label>
            <input type="text" class="form-control" value="{{ $block->classrooms_count }}" disabled>
        </div>
    </form>

    <h2>Salas</h2>
    <hr>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Abreviação</th>
                <th>Tipo</th>
                <th>Capacidade</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
                @foreach($block->classrooms as $classroom)
                    <tr>
                        <td>{{ $classroom->id }}</td>
                        <td>{{ $classroom->name }}</td>
                        <td>{{ $classroom->initials }}</td>
                        <td>{{ $classroom->type->name }}</td>
                        <td>{{ $classroom->capacity }}</td>
                        <td>
                            <a class="btn btn-default" href="{{ action('ClassroomController@show', [ 'id' => $classroom->id ]) }}" role="button">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection