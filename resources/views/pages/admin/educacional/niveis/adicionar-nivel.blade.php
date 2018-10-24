@extends('layouts.admin')

@section('content-admin')
    <h2>Adicionar Nível</h2>

    @include('partials.list-errors-form')

    <form method="POST" action="{{ route('educationlevels.store') }}">
        @csrf

        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="Nível (Ex: Superior)" required minlength="2">
        </div>

        <button type="submit" class="btn btn-primary">Adicionar Nível</button>
    </form>
@endsection