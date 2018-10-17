@extends('layouts.admin')

@section('content-admin')
    <h2>Adicionar Curso</h2>

    <form>
        <div class="form-group">
            <label for="">Unidade</label>
            <select class="form-control">
                <option value="">Design, Infraestrutura e Ambiente</option>
                <option value="">Informação e Comunicação</option>
                <option value="">Controle e Processos Industriais</option>
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
            <label for="">Número de Períodos</label>
            <input type="text" class="form-control" placeholder="Número de Períodos">
        </div>
        <div class="form-group">
            <label for="">Nível</label>
            <select class="form-control">
                <option value="">Geral</option>
                <option value="">Integrado</option>
                <option value="">Mestrado</option>
                <option value="">Subsequente</option>
                <option value="">Superior</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Turno</label>
            <select class="form-control">
                <option value="">Matutino</option>
                <option value="">Vespertino</option>
                <option value="">Noturno</option>
                <option value="">Integral</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Curso</button>
    </form>
@endsection