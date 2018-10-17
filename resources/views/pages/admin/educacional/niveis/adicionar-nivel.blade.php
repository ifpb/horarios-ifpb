@extends('layouts.admin')

@section('content-admin')
    <h2>Adicionar Nível</h2>

    <form>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" placeholder="Nome">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Nível</button>
    </form>
@endsection