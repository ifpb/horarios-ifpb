@extends('layouts.admin')

@section('content-admin')
    <h2>Editar Bloco</h2>

    @include('partials.list-errors-form')

    <form method="POST" action="{{ route('blocks.update', $block->id) }}">
        @method('PATCH')
        @csrf

        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $block->name) }}" placeholder="Nome (Ex: Bloco de Informática)" min="2" required>
        </div>
        <div class="form-group {!! $errors->has('initials') ? 'has-error' : '' !!}">
            <label for="initials">Abreviação</label>
            <input type="text" id="initials" name="initials" class="form-control" value="{{ old('initials', $block->initials) }}" placeholder="Abreviação" max="12" required>
            <span id="helpBlock" class="help-block">Máximo de 12 caracteres.</span>
        </div>
        <div class="form-group {!! $errors->has('location') ? 'has-error' : '' !!}">
            <label for="location">Localização</label>
            <input type="text" id="location" name="location" class="form-control" value="{{ old('location', $block->location) }}" placeholder="Localização (ex: Próximo a saída de trás)" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Bloco</button>
    </form>
@endsection