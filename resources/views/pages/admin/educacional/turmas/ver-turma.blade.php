@extends('layouts.admin')

@section('content-admin')
    <h2>Turma: {{ $teachingClass->subject->name }} - {{ $teachingClass->professor->nickname }}</h2>

    <a class="btn btn-default mb-5" href="{{ route('teachingclasses.edit', $teachingClass->id) }}" role="button">
        <span class="glyphicon glyphicon-edit"></span>
        Editar Turma
    </a>

    <a class="btn btn-danger mb-5" href="#" onClick="createWarning('{{ route('teachingclasses.destroy', $teachingClass->id) }}');return false;" role="button">
        <span class="glyphicon glyphicon-remove"></span>
        Remover Turma
    </a>

    {{--TODO: Mudar este link para a reserva de sala--}}
    <a class="btn btn-default mb-5" href="{{ route('teachingclasses.edit', $teachingClass->id) }}" role="button">
        <span class="glyphicon glyphicon-plus"></span>
        Reservar uma sala
    </a>

    <form>
        <div class="form-group">
            <label for="">Disciplina</label>
            <select class="form-control" disabled>
                <option value="">{{ $teachingClass->subject->name }}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Professor</label>
            <select class="form-control" disabled>
                <option value="">{{ $teachingClass->professor->nickname }}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Identificação</label>
            <select class="form-control" disabled>
                <option value="">{{ $teachingClass->type->name }}</option>
            </select>
        </div>
    </form>

    <hr>
    <h2 class="mb-3">Salas Reservadas</h2>

    @foreach($classrooms as $classroom)
        <h2 class="mt-5">{{ $classroom->name }}</h2>

        @php($dayTimeReservations = $classroom->dayTimeReservations)
        @include('partials.tabela-dias-horarios-admin', compact('days', 'times', 'dayTimeReservations'))
    @endforeach
@endsection

@section('custom-js')
    <script src="{{ URL::asset('js/admin/remove-reservation.js') }}"></script>
@endsection