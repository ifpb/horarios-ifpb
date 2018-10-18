@extends('layouts.admin')

@section('content-admin')
    <h2>Editar Sala</h2>

    @include('partials.list-errors-form')

    <form method="POST" action="{{ route('classroom.update', $classroom->id) }}">
        @method('PATCH')
        @csrf

        <div class="form-group">
            <label for="classroom_types">Tipo de sala</label>
            <select id="classroom_types" name="classroom_type_id" class="form-control">
                @foreach($classroom_types as $classroom_type)
                    <option value="{{ $classroom_type->id }}" @if($classroom_type->id == $classroom->type->id) selected @endif>{{ $classroom_type->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="blocks">Bloco</label>
            <select id="blocks" name="block_id" class="form-control">
                @foreach($blocks as $block)
                    <option value="{{ $block->id }}" @if($block->id == $classroom->block->id) selected @endif>{{ $block->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $classroom->name) }}" placeholder="Nome (Ex: Sala 27)" minlength="2" required>
        </div>
        <div class="form-group {!! $errors->has('initials') ? 'has-error' : '' !!}">
            <label for="initials">Abreviação</label>
            <input type="text" id="initials" name="initials" class="form-control" value="{{ old('initials', $classroom->initials) }}" placeholder="Abreviação (Ex: SLA 27)" maxlength="12" required>
            <span id="helpBlock" class="help-block">Máximo de 12 caracteres.</span>
        </div>
        <div class="form-group {!! $errors->has('capacity') ? 'has-error' : '' !!}">
            <label for="capacity">Capacidade</label>
            <input type="number" id="capacity" name="capacity" class="form-control" value="{{ old('capacity', $classroom->capacity) }}" placeholder="Capacidade (Ex: 28)" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Sala</button>
    </form>
@endsection