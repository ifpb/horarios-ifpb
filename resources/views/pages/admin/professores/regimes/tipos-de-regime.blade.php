@extends('layouts.admin')

@section('content-admin')
    <h2>Tipos de Regime</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="{{ route('employmenttypes.create') }}" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Tipo de Regime
        </a>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Horas Semanais</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employmentTypes as $employmentType)
                    <tr>
                        <td>{{ $employmentType->id }}</td>
                        <td>{{ $employmentType->name }}</td>
                        <td>{{ $employmentType->hours_week }}h</td>
                        <td>
                            <a class="btn btn-default" href="{{ route('employmenttypes.show', $employmentType->id) }}" role="button">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>

                            <a class="btn btn-default" href="{{ route('employmenttypes.edit', $employmentType->id) }}" role="button">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>

                            <a class="btn btn-default" href="#" onClick="createWarning('{{ route('employmenttypes.destroy', $employmentType->id) }}');return false;" role="button">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection