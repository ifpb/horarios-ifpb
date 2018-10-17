@extends('layouts.admin')

@section('content-admin')
    <h2>Adicionar Turma</h2>

    <form>
        <div class="form-group">
            <label for="">Disciplina</label>
            <select class="form-control">
                <option value="">Redes de Computadores</option>
                <option value="">Design de Interiores</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Professor</label>
            <select class="form-control">
                <option value="">José Quaresma Filho</option>
                <option value="">Luiz Carlos Chaves</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Identificação</label>
            <select class="form-control">
                <option value="">U</option>
                <option value="">A</option>
                <option value="">B</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar Turma</button>

        {{--Ao adicionar turma, oferecer link para reservar sala para esta mesma turma--}}
    </form>
@endsection