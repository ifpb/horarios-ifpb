@extends('layouts.admin')

@section('content-admin')
    <h2>Adicionar Tipo de Vínculo</h2>

    @include('partials.list-errors-form')

    <form method="POST" action="{{ route('employmentbonds.store') }}">
        @csrf
        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="Vínculo (Ex: Efetivo)" required minlength="2">
        </div>

        <button type="submit" class="btn btn-primary">Adicionar Vínculo</button>
    </form>
@endsection