@extends('layouts.admin')

@section('content-admin')
    <h2>Adicionar Unidade</h2>

    @include('partials.list-errors-form')

    <form method="POST" action="{{ route('teachingunits.store') }}">
        @csrf
        
        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="Nome (Ex: Unidade de Informática)">
        </div>
        <div class="form-group {!! $errors->has('initials') ? 'has-error' : '' !!}">
            <label for="initials">Abreviação</label>
            <input type="text" id="initials" name="initials" class="form-control" value="{{ old('initials') }}" placeholder="Abreviação (Ex: UNID INFO)">
            <span id="helpBlock" class="help-block">Máximo de 12 caracteres.</span>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar Unidade</button>
    </form>


@endsection