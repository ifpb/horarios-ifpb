@extends('layouts.admin')

@section('content-admin')
    <h2>Cursos</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="{{ route('courses.create') }}" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Curso
        </a>
    </div>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Abreviação</th>
                    <th>Períodos</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->initials }}</td>
                        <td>{{ $course->periods }}</td>
                        <td>
                            <a class="btn btn-default" href="{{ route('courses.show', $course->id) }}" role="button">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>

                            <a class="btn btn-default" href="{{ route('courses.edit', $course->id) }}" role="button">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>

                            <a class="btn btn-default" href="#" onClick="createWarning('{{ route('courses.destroy', $course->id) }}');return false;" role="button">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection