@extends('layouts.admin')

@section('content-admin')
    <h2>Adicionar Sala</h2>

    <div class="alert alert-danger" role="alert">Houve um problema.</div>

    <form>
        <div class="form-group">
            <label for="">Tipo de sala</label>
            <select class="form-control">
                <option value="">Sala</option>
                <option value="">Laboratório</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Bloco</label>
            <select class="form-control">
                <option value="">Bloco de Informática - BLOCO INFO</option>
                <option value="">Engenharia Eletrica 01 - ENG EL 01</option>
            </select>
        </div>
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
            <label for="">Capacidade</label>
            <input type="text" class="form-control" placeholder="Capacidade">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Sala</button>
    </form>
@endsection