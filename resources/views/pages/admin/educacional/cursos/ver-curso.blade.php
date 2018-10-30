@extends('layouts.admin')

@section('content-admin')
    <h2>Curso: {{ $course->name }}</h2>

    <a class="btn btn-default mb-5" href="{{ route('courses.edit', $course->id) }}" role="button">
        <span class="glyphicon glyphicon-edit"></span>
        Editar Curso
    </a>

    <a class="btn btn-danger mb-5" href="#" onClick="createWarning('{{ route('courses.destroy', $course->id) }}');return false;" role="button">
        <span class="glyphicon glyphicon-remove"></span>
        Remover Curso
    </a>

    <form>
        <div class="form-group">
            <label for="teaching_unit_id">Unidade de ensino</label>
            <select name="teaching_unit_id" class="form-control" disabled>
                <option>{{ $course->teachingUnit->name }}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $course->name }}" disabled>
        </div>
        <div class="form-group">
            <label for="initials">Abreviação</label>
            <input type="text" id="initials" name="initials" class="form-control" value="{{ $course->initials }}" disabled>
        </div>
        <div class="form-group">
            <label for="periods">Periodos</label>
            <input type="number" id="periods" name="periods" class="form-control" value="{{ $course->periods }}" disabled>
        </div>
        <div class="form-group">
            <label for="teaching_level_id">Nível de ensino</label>
            <select name="education_level_id" class="form-control" disabled>
                <option>{{ $course->educationLevel->name }}</option>
            </select>
        </div>
        <div class="form-group">
            <label class="flex">Turnos</label>
            @foreach($shifts as $shift)
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox1" name="shifts[]" @if($course->shifts->contains('id', $shift->id)) checked @endif disabled> {{ $shift->name }}
                </label>
            @endforeach
        </div>
    </form>

    <hr>
    <h2 class="mb-3">Disciplinas</h2>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Abreviação</th>
                <th>Periodo</th>
                <th>CH</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($course->subjects as $subject)
                <tr>
                    <td>{{ $subject->id }}</td>
                    <td>{{ $subject->name }}</td>
                    <td>{{ $subject->initials }}</td>
                    <td>{{ $subject->period }}</td>
                    <td>{{ $subject->workload }}h</td>
                    <td>
                        <a class="btn btn-default" href="{{ route('subjects.show', $subject->id) }}" role="button">
                            <span class="glyphicon glyphicon-eye-open"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection