@extends('layouts.admin')

@section('content-admin')
    <h2>Nível: {{ $educationLevel->name }}</h2>

    <a class="btn btn-default mb-5" href="{{ route('educationlevels.edit', $educationLevel->id) }}" role="button">
        <span class="glyphicon glyphicon-edit"></span>
        Editar Nível
    </a>

    <a class="btn btn-danger mb-5" href="#" onClick="createWarning('{{ route('educationlevels.destroy', $educationLevel->id) }}');return false;" role="button">
        <span class="glyphicon glyphicon-remove"></span>
        Remover Nível
    </a>

    <form>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" value="{{ $educationLevel->name }}" disabled>
        </div>
    </form>

    <hr>
    <h2 class="mb-3">Cursos</h2>

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
            @foreach($educationLevel->courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->initials }}</td>
                    <td>{{ $course->periods }}</td>
                    <td>
                        <a class="btn btn-default" href="{{ route('courses.show', $course->id) }}" role="button">
                            <span class="glyphicon glyphicon-eye-open"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection