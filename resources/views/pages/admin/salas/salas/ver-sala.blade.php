@extends('layouts.admin')

@section('content-admin')
    <h2>Sala: {{ $classroom->name }}</h2>

    <a class="btn btn-default mb-5" href="{{ route('classroom.edit', $classroom->id) }}" role="button">
        <span class="glyphicon glyphicon-edit"></span>
        Editar Sala
    </a>

    <a class="btn btn-danger mb-5" href="#" onClick="createWarning('{{ route('classroom.destroy', $classroom->id) }}');return false;" role="button">
        <span class="glyphicon glyphicon-remove"></span>
        Remover Sala
    </a>


    <form>
        <div class="form-group">
            <label for="">Tipo de sala</label>
            <select class="form-control" disabled>
                <option>{{ $classroom->type->name }}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Bloco</label>
            <select class="form-control" disabled>
                <option value="">{{ $classroom->block->name }}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" id="name" class="form-control" value="{{ $classroom->name }}" disabled>
        </div>
        <div class="form-group">
            <label for="initials">Abreviação</label>
            <input type="text" id="initials" class="form-control" value="{{ $classroom->initials }}" disabled>
        </div>
        <div class="form-group">
            <label for="capacity">Capacidade</label>
            <input type="text" id="capacity" class="form-control" value="{{ $classroom->capacity }}" disabled>
        </div>
    </form>


    {{--TODO: Dinamizar Horários da Sala--}}
    <h2>Horarios da sala</h2>

    @include('partials.tabela-dias-horarios-admin', compact('days', 'times', 'dayTimeReservations'))
@endsection

@section('custom-js')
    <script src="{{ URL::asset('js/admin/remove-reservation.js') }}"></script>
@endsection