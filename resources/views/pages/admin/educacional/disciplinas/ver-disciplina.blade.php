@extends('layouts.admin')

@section('content-admin')
    <h2>Disciplina: {{ $subject->name }}</h2>

    <a class="btn btn-default mb-5" href="{{ route('subjects.edit', $subject->id) }}" role="button">
        <span class="glyphicon glyphicon-edit"></span>
        Editar Disciplina
    </a>

    <a class="btn btn-danger mb-5" href="#" onClick="createWarning('{{ route('subjects.destroy', $subject->id) }}');return false;" role="button">
        <span class="glyphicon glyphicon-remove"></span>
        Remover Disciplina
    </a>

    <form>
        <div class="form-group">
            <label for="course">Curso</label>
            <select id="course" class="form-control" disabled>
                <option value="">{{ $subject->course->name }}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" id="name" class="form-control" value="{{ $subject->name }}" disabled>
        </div>
        <div class="form-group">
            <label for="initials">Abreviação</label>
            <input type="text" id="initials" class="form-control" value="{{ $subject->initials }}" disabled>
        </div>
        <div class="form-group">
            <label for="period">Período do curso</label>
            <input type="text" id="period" value="{{ $subject->period }}" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label for="workload">Carga Horária</label>
            <input type="text" id="workload" class="form-control" value="{{ $subject->workload }}" disabled>
        </div>
        <div class="form-group">
            <label for="classes_week">Aulas por semana</label>
            <input type="text" id="classes_week" value="{{ $subject->classes_week }}" class="form-control" disabled>
        </div>
    </form>


    {{--TODO: Dinamizar turmas--}}
    <hr>
    <h2 class="mb-3">Turmas</h2>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Periodo</th>
                <th>CH</th>
                <th>Num Aulas</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Administração de Sistemas Abertos</td>
                <td>3</td>
                <td>87</td>
                <td>
                    <a class="btn btn-default" href="/admin/disciplinas/ver" role="button">
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>Desenvolvimento Web</td>
                <td>4</td>
                <td>87</td>
                <td>
                    <a class="btn btn-default" href="/admin/disciplinas/ver" role="button">
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection