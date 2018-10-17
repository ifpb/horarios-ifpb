@extends('layouts.admin')

@section('content-admin')
    <h2>Adicionar Tipo de Regime</h2>

    <form>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" placeholder="Nome (ex: Efetivo)">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Tipo de Regime</button>
    </form>
@endsection