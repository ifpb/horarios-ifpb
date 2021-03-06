@extends('layouts.admin')

@section('content-admin')
    <h2>Adicionar Turma</h2>

    @include('partials.list-errors-form')

    <form method="POST" action="{{ route('teachingclasses.store') }}">
        @csrf

        <div class="form-group">
            <label for="subject_id">Disciplina</label>
            <select name="subject_id" class="form-control" required>
                @foreach($subjects as $subject)
                    <option value="{{ $subject->id }}" @if(old('subject_id') == $subject->id) {{ 'selected' }} @endif>{{ $subject->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="professor_id">Professor</label>
            <select name="professor_id" class="form-control" required>
                @foreach($professors as $professor)
                    <option value="{{ $professor->id }}" @if(old('professor_id') == $professor->id) {{ 'selected' }} @endif>{{ $professor->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="teaching_class_type_id">Tipo de Turma</label>
            <select name="teaching_class_type_id" class="form-control" required>
                @foreach($teaching_class_types as $teaching_class_type)
                    <option value="{{ $teaching_class_type->id }}" @if(old('teaching_class_type_id') == $teaching_class_type->id) {{ 'selected' }} @endif>{{ $teaching_class_type->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar Turma</button>

        {{--Ao adicionar turma, oferecer link para reservar sala para esta mesma turma--}}
    </form>
@endsection