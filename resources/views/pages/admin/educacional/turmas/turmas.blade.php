@extends('layouts.admin')

@section('content-admin')
    <h2>Turmas</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="{{ route('teachingclasses.create') }}" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Turma
        </a>
    </div>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Disciplina</th>
                    <th>Professor</th>
                    <th>Ident.</th>
                    <th>Sala Reservada?</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teachingClasses as $teachingClass)
                    <tr>
                        <td>{{ $teachingClass->id }}</td>
                        <td>{{ $teachingClass->subject->name }}</td>
                        <td>{{ $teachingClass->professor->name }}</td>
                        <td>{{ $teachingClass->type->initials }}</td>
                        <td>@if($teachingClass->reservations_count) Sim @else Não @endif</td>
                        <td>
                            <a class="btn btn-default" href="{{ route('teachingclasses.show', $teachingClass->id) }}" role="button">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>

                            <a class="btn btn-default" href="{{ route('teachingclasses.edit', $teachingClass->id) }}" role="button">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>

                            <a class="btn btn-default" href="#" onClick="createWarning('{{ route('teachingclasses.destroy', $teachingClass->id) }}');return false;" role="button">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection