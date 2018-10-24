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

    {{-- TODO: Dinamizar Unidades de Ensino e Disciplinas--}}
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
                <th>Nome</th>
                <th>Curso</th>
                <th>Periodo</th>
                <th>CH</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Administração de Sistemas Abertos</td>
                <td>CST REDES</td>
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
                <td>CST REDES</td>
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