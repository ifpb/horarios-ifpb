@extends('layouts.admin')

@section('content-admin')
    <h2>Editar Tipo de Vínculo</h2>

    @include('partials.list-errors-form')

    <form method="POST" action="{{ route('employmentbonds.update', $employmentBond->id) }}">
        @csrf
        @method('PATCH')
        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $employmentBond->name) }}" required minlength="2">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Vínculo</button>
    </form>
@endsection