@extends('layouts.admin')

@section('content-admin')
    <h2>Adicionar Usuário</h2>

    <form>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="">Descrição</label>
            <input type="text" class="form-control" placeholder="Descrição (ex: Coordenador de informática)">
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
            <label for="">Senha</label>
            <input type="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Confirme a senha</label>
            <input type="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-5">Adicionar Usuário</button>
    </form>
@endsection