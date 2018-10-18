@extends('layouts.admin')

@section('content-admin')
    <h2>Gerenciamento de Blocos</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="/admin/blocos/adicionar" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Bloco
        </a>
    </div>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
                <tr>
                    <td>Id</td>
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
                            <a class="btn btn-default" href="{{ action('BlockController@show', [ 'id' => $block->id ]) }}" role="button">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>

                            <a class="btn btn-default" href="{{ action('BlockController@edit', [ 'id' => $block->id ]) }}" role="button">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>

                            <a class="btn btn-default" href="#" onClick="createWarning('{{ action('BlockController@destroy', [ 'id' => $block->id ]) }}');return false;" role="button">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection