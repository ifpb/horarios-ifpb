@extends('layouts.admin')

@section('content-admin')
    <h2>Adicionar Unidade</h2>

    <form>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="">Abreviação</label>
            <input type="text" class="form-control" placeholder="Abreviação">
            <span id="helpBlock" class="help-block">Máximo de 12 caracteres.</span>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Unidade</button>
    </form>


@endsection