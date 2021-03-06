@extends('layouts.admin')

@section('content-admin')
    <h2>Gerenciamento de Blocos</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="{{  route('blocks.create') }}" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Bloco
        </a>
    </div>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Abreviação</th>
                    <th>Salas</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blocks as $block)
                    <tr>
                        <td>{{ $block->id }}</td>
                        <td>{{ $block->name }}</td>
                        <td>{{ $block->initials }}</td>
                        <td>{{ $block->classrooms_count }}</td>
                        <td>
                            <a class="btn btn-default" href="{{ route('blocks.show', $block->id) }}" role="button">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>

                            <a class="btn btn-default" href="{{ route('blocks.edit', $block->id) }}" role="button">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>

                            <a class="btn btn-default" href="#" onClick="createWarning('{{ route('blocks.destroy', $block->id) }}');return false;" role="button">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection