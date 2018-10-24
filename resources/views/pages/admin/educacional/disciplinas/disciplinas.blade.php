@extends('layouts.admin')

@section('content-admin')
    <h2>Disciplinas</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="{{ route('subjects.create') }}" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Disciplina
        </a>
    </div>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Abreviação</th>
                    <th>Curso</th>
                    <th>Periodo</th>
                    <th>CH</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subjects as $subject)
                    <tr>
                        <td>{{ $subject->id }}</td>
                        <td>{{ $subject->name }}</td>
                        <td>{{ $subject->initials }}</td>
                        <td>{{ $subject->course->name }}</td>
                        <td>{{ $subject->period }}</td>
                        <td>{{ $subject->workload }}h</td>
                        <td>
                            <a class="btn btn-default" href="{{ route('subjects.show', $subject->id) }}" role="button">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>

                            <a class="btn btn-default" href="{{ route('subjects.edit', $subject->id) }}" role="button">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>

                            <a class="btn btn-default" href="#" onClick="createWarning('{{ route('subjects.destroy', $subject->id) }}');return false;" role="button">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection