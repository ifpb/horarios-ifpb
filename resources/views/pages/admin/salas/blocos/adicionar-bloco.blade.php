@extends('layouts.admin')

@section('content-admin')
    <h2>Adicionar Bloco</h2>

    @include('partials.list-errors-form')

    <form method="POST" action="{{ action('BlockController@store') }}">
        @csrf

        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="Nome (Ex: Bloco de Informática)" min="2" required>
        </div>
        <div class="form-group {!! $errors->has('initials') ? 'has-error' : '' !!}">
            <label for="initials">Abreviação</label>
            <input type="text" id="initials" name="initials" class="form-control" value="{{ old('initials') }}" placeholder="Abreviação" max="12" required>
            <span id="helpBlock" class="help-block">Máximo de 12 caracteres.</span>
        </div>
        <div class="form-group {!! $errors->has('location') ? 'has-error' : '' !!}">
            <label for="location">Localização</label>
            <input type="text" id="location" name="location" class="form-control" value="{{ old('location') }}" placeholder="Localização (ex: Próximo a saída de trás)" required>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Bloco</button>
    </form>
@endsection