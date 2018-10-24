@extends('layouts.admin')

@section('content-admin')
    <h2>Tipos de Vínculos</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="{{ route('employmentbonds.create') }}" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Tipo de Vínculo
        </a>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employmentBonds as $employmentBond)
                    <tr>
                        <td>{{ $employmentBond->id }}</td>
                        <td>{{ $employmentBond->name }}</td>
                        <td>
                            <a class="btn btn-default" href="{{ route('employmentbonds.show', $employmentBond->id) }}" role="button">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>

                            <a class="btn btn-default" href="{{ route('employmentbonds.edit', $employmentBond->id) }}" role="button">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>

                            <a class="btn btn-default" href="#" onClick="createWarning('{{ route('employmentbonds.destroy', $employmentBond->id) }}');return false;" role="button">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection