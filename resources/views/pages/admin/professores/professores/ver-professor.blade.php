@extends('layouts.admin')

@section('content-admin')
    <h2>Professor: Luiz Carlos Chaves</h2>

    <a class="btn btn-default mb-5" href="#" onClick="createWarning('#');return false;" role="button">
        <span class="glyphicon glyphicon-edit"></span>
        Editar Professor
    </a>

    <a class="btn btn-default mb-5" href="#" onClick="createWarning('#');return false;" role="button">
        <span class="glyphicon glyphicon-minus"></span>
        Remover Professor
    </a>

    <form>
        <div class="form-group">
            <label for="">Unidade</label>
            <select class="form-control" disabled>
                <option value="">Design, Infraestrutura e Ambiente</option>
                <option value="">Informação e Comunicação</option>
                <option value="">Controle e Processos Industriais</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label for="">Apelido</label>
            <input type="text" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label for="">E-mail</label>
            <input type="email" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label for="">Telefone</label>
            <input type="text" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label for="">Vínculo</label>
            <select class="form-control" disabled>
                <option value="">Integral (40h)</option>
                <option value="">Parcial (20h)</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Regime</label>
            <select class="form-control" disabled>
                <option value="">Efetivo</option>
                <option value="">Temporário</option>
            </select>
        </div>
        <div class="form-group">
            <label class="flex" for="">Disponibilidade</label>
            <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox1" value="option1" checked disabled> Segunda
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox2" value="option2" checked disabled> Terça
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox3" value="option3" checked disabled> Quarta
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox3" value="option3" checked disabled> Quinta
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox3" value="option3" checked disabled> Sexta
            </label>
        </div>
    </form>

    <hr>
    <h2 class="mb-3">Turmas</h2>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
            <tr>
                <th>Disciplina</th>
                <th>Ident.</th>
                <th>Sala Reservada?</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Administração de Sistemas Abertos</td>
                <td>U</td>
                <td>Não</td>
                <td>
                    <a class="btn btn-default" href="/admin/turmas/ver" role="button">
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </a>

                    <a class="btn btn-default" href="#" role="button">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>

                    <a class="btn btn-default" href="#" onClick="createWarning('#');return false;" role="button">
                        <span class="glyphicon glyphicon-remove"></span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>Desenvolvimento Web</td>
                <td>U</td>
                <td>Sim</td>
                <td>
                    <a class="btn btn-default" href="/admin/turmas/ver" role="button">
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </a>

                    <a class="btn btn-default" href="#" role="button">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>

                    <a class="btn btn-default" href="#" onClick="createWarning('#');return false;" role="button">
                        <span class="glyphicon glyphicon-remove"></span>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection