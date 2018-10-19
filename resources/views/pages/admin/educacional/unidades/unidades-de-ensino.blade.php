@extends('layouts.admin')

@section('content-admin')
    <h2>Unidades de Ensino</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="{{  route('teachingunits.create') }}" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Unidade
        </a>
    </div>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Abreviação</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teachingunits as $teachingunit)
                    <tr>
                        <td>{{ $teachingunit->id }}</td>
                        <td>{{ $teachingunit->name }}</td>
                        <td>{{ $teachingunit->initials }}</td>
                        <td>
                            <a class="btn btn-default" href="{{ route('teachingunits.show', $teachingunit->id) }}" role="button">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>

                            <a class="btn btn-default" href="{{ route('teachingunits.edit', $teachingunit->id) }}" role="button">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>

                            <a class="btn btn-default" href="#" onClick="createWarning('{{ route('teachingunits.destroy', $teachingunit->id) }}');return false;" role="button">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection