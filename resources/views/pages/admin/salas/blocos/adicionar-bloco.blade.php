@extends('layouts.admin')

@section('content-admin')
    <h2>Adicionar Bloco</h2>

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
        <div class="form-group">
            <label for="">Localização</label>
            <input type="text" class="form-control" placeholder="Localização (ex: Próximo a saída de trás)">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Bloco</button>
    </form>
@endsection