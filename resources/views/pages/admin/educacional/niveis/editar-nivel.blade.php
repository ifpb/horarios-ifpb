@extends('layouts.admin')

@section('content-admin')
    <h2>Atualizar Nível</h2>

    @include('partials.list-errors-form')

    <form method="POST" action="{{ route('educationlevels.update', $educationLevel->id) }}">
        @csrf
        @method('PATCH')

        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $educationLevel->name) }}" placeholder="Nível (Ex: Superior)" required minlength="12">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Nível</button>
    </form>
@endsection