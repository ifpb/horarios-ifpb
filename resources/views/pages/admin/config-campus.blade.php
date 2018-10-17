@extends('layouts.admin')

@section('content-admin')
    <h2>Configurações do Campus</h2>

    @include('partials.list-errors-form')
    @include('partials.alerts')

    <form method="POST" action="{{ action('CampusConfigController@update') }}">
        @method('patch')
        @csrf

        <div class="form-group {!! $errors->has('cidade') ? 'has-error' : '' !!}">
            <label for="cidade">Cidade</label>
            <input type="text" id="cidade" class="form-control" name="location" value="{{ old('cidade', $campus->location) }}">
        </div>
        <div class="form-group {!! $errors->has('sigla') ? 'has-error' : '' !!}">
            <label for="sigla">Sigla</label>
            <input type="text" id="sigla" class="form-control" name="initials" value="{{ old('sigla', $campus->initials) }}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar Configurações</button>
    </form>
@endsection