@extends('layouts.admin')

@section('content-admin')
    <h2>Editar Curso</h2>

    @include('partials.list-errors-form')

    <form method="POST" action="{{ route('courses.update', $course->id) }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="teaching_unit_id">Unidade</label>
            <select name="teaching_unit_id" class="form-control">
                @foreach($teachingUnits as $teachingUnit)
                    <option value="{{ $teachingUnit->id }}" @if(old('teaching_unit_id', $course->teaching_unit_id) == $teachingUnit->id) {{ 'selected' }} @endif>{{ $teachingUnit->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $course->name) }}" placeholder="Nome (Ex: Redes de Computadores)" required minlength="2">
        </div>
        <div class="form-group {!! $errors->has('initials') ? 'has-error' : '' !!}">
            <label for="initials">Abreviação</label>
            <input type="text" id="initials" name="initials" class="form-control" value="{{ old('initials', $course->initials) }}" placeholder="Abreviação (Ex: CST REDES)" required maxlength="12">
            <span id="helpBlock" class="help-block">Máximo de 12 caracteres.</span>
        </div>
        <div class="form-group {!! $errors->has('periods') ? 'has-error' : '' !!}">
            <label for="periods">Periodos</label>
            <input type="number" id="periods" name="periods" class="form-control" value="{{ old('periods', $course->periods) }}" placeholder="Periodos (Ex: 7)" required>
        </div>
        <div class="form-group">
            <label for="teaching_level_id">Nível de ensino</label>
            <select name="education_level_id" class="form-control">
                @foreach($educationLevels as $educationLevel)
                    <option value="{{ $educationLevel->id }}" @if(old('education_level_id', $course->education_level_id) == $educationLevel->id) {{ 'selected' }} @endif>{{ $educationLevel->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="flex">Turnos</label>
            @foreach($shifts as $shift)
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox1" name="shifts[]" value="{{ $shift->id }}" @if(is_array(old('shifts', $course->shifts)) && in_array($shift->id, old('shifts', $course->shifts))) checked @endif> {{ $shift->name }}
                </label>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Curso</button>
    </form>
@endsection