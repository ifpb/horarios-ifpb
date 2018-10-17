@extends('layouts.admin')

@section('content-admin')
    <h2>Adicionar Professor</h2>

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
            <label for="">Apelido</label>
            <input type="text" class="form-control" placeholder="Apelido">
        </div>
        <div class="form-group">
            <label for="">E-mail</label>
            <input type="email" class="form-control" placeholder="E-mail">
        </div>
        <div class="form-group">
            <label for="">Telefone</label>
            <input type="text" class="form-control" placeholder="Telefone (ex: 83 999128383)">
        </div>
        <div class="form-group">
            <label for="">Vínculo</label>
            <select class="form-control">
                <option value="">Integral (40h)</option>
                <option value="">Parcial (20h)</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Regime</label>
            <select class="form-control">
                <option value="">Efetivo</option>
                <option value="">Temporário</option>
            </select>
        </div>
        <div class="form-group">
            <label class="flex" for="">Disponibilidade</label>
            <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox1" value="option1" checked> Segunda
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox2" value="option2" checked> Terça
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox3" value="option3" checked> Quarta
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox3" value="option3" checked> Quinta
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox3" value="option3" checked> Sexta
            </label>
        </div>

        <button type="submit" class="btn btn-primary mt-5">Adicionar Professor</button>
    </form>
@endsection