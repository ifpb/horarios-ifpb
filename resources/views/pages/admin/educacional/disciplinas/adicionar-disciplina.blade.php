@extends('layouts.admin')

@section('content-admin')
    <h2>Adicionar Disciplina</h2>

    <form>
        <div class="form-group">
            <label for="">Curso</label>
            <select class="form-control">
                <option value="">Redes de Computadores</option>
                <option value="">Design de Interiores</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="">Período</label>
            <input type="text" class="form-control" placeholder="Em que período entrará a disciplina">
        </div>
        <div class="form-group">
            <label for="">Carga Horária</label>
            <input type="text" class="form-control" placeholder="Carga horária da disciplina">
        </div>
        <div class="form-group">
            <label for="">Aulas</label>
            <input type="text" class="form-control" placeholder="Quantas aulas na semana terá a disciplina?">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Disciplina</button>
    </form>
@endsection