@extends('layouts.admin')

@section('content-admin')
    <h2>Adicionar Regime</h2>

    @include('partials.list-errors-form')

    <form method="POST" action="{{ route('employmenttypes.store') }}">
        @csrf
        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="Nome (Ex: Parcial)" required minlength="2">
        </div>
        <div class="form-group {!! $errors->has('hours_week') ? 'has-error' : '' !!}">
            <label for="hours_week">Horas Semanais</label>
            <input type="number" id="hours_week" name="hours_week" class="form-control" value="{{ old('hours_week') }}" placeholder="Horas Semanais (Ex: 20)" required>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Regime</button>
    </form>
@endsection