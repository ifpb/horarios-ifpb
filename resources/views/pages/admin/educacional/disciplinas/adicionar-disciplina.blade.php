@extends('layouts.admin')

@section('content-admin')
    <h2>Adicionar Disciplina</h2>

    @include('partials.list-errors-form')

    <form method="POST" action="{{ route('subjects.store') }}">
        @csrf
        <div class="form-group">
            <label for="course_id">Curso</label>
            <select name="course_id" class="form-control">
                @foreach($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="Nome (Ex: Fundamentos da Computação)" minlength="2" required>
        </div>
        <div class="form-group {!! $errors->has('initials') ? 'has-error' : '' !!}">
            <label for="initials">Abreviação</label>
            <input type="text" id="initials" name="initials" class="form-control" value="{{ old('initials') }}" placeholder="Abreviação (Ex: FUND COMP)" maxlength="15" required>
        </div>
        <div class="form-group {!! $errors->has('period') ? 'has-error' : '' !!}">
            <label for="period">Período do curso</label>
            <input type="number" id="period" name="period" class="form-control" value="{{ old('period') }}" placeholder="Period (Ex: 2)" required>
        </div>
        <div class="form-group {!! $errors->has('workload') ? 'has-error' : '' !!}">
            <label for="workload">Carga Horária</label>
            <input type="number" id="workload" name="workload" class="form-control" value="{{ old('workload') }}" placeholder="Carga Horária (Ex: 87 (em horas))" required>
        </div>
        <div class="form-group {!! $errors->has('classes_week') ? 'has-error' : '' !!}">
            <label for="classes_week">Aulas /semana</label>
            <input type="number" id="classes_week" name="classes_week" class="form-control" value="{{ old('classes_week') }}" placeholder="Aulas /semana (Ex: 4)" required>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Disciplina</button>
    </form>
@endsection