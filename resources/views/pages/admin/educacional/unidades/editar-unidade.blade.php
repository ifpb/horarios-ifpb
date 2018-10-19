@extends('layouts.admin')

@section('content-admin')
    <h2>Atualizar Unidade</h2>

    @include('partials.list-errors-form')

    <form method="POST" action="{{ route('teachingunits.update', $teachingUnit->id) }}">
        @method('PATCH')
        @csrf
        
        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $teachingUnit->name) }}" placeholder="Nome (Ex: Unidade de Informática)" minlength="2" required>
        </div>
        <div class="form-group {!! $errors->has('initials') ? 'has-error' : '' !!}">
            <label for="initials">Abreviação</label>
            <input type="text" id="initials" name="initials" class="form-control" value="{{ old('initials', $teachingUnit->initials) }}" placeholder="Abreviação (Ex: UNID INFO)" maxlength="12" required>
            <span id="helpBlock" class="help-block">Máximo de 12 caracteres.</span>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Unidade</button>
    </form>


@endsection