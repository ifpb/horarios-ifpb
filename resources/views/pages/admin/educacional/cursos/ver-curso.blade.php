@extends('layouts.admin')

@section('content-admin')
    <h2>Redes de Computadores</h2>

    <a class="btn btn-default mb-5" href="#" onClick="createWarning('#');return false;" role="button">
        <span class="glyphicon glyphicon-minus"></span>
        Remover Curso
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
            <label for="">Abreviação</label>
            <input type="text" class="form-control" disabled>
            <span id="helpBlock" class="help-block">Máximo de 12 caracteres.</span>
        </div>
        <div class="form-group">
            <label for="">Número de Períodos</label>
            <input type="text" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label for="">Nível</label>
            <select class="form-control" disabled>
                <option value="">Geral</option>
                <option value="">Integrado</option>
                <option value="">Mestrado</option>
                <option value="">Subsequente</option>
                <option value="">Superior</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Turno</label>
            <select class="form-control" disabled>
                <option value="">Matutino</option>
                <option value="">Vespertino</option>
                <option value="">Noturno</option>
                <option value="">Integral</option>
            </select>
        </div>
    </form>

    <hr>
    <h2 class="mb-3">Disciplinas</h2>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Curso</th>
                <th>Periodo</th>
                <th>CH</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Administração de Sistemas Abertos</td>
                <td>CST REDES</td>
                <td>3</td>
                <td>87</td>
                <td>
                    <a class="btn btn-default" href="/admin/disciplinas/ver" role="button">
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>Desenvolvimento Web</td>
                <td>CST REDES</td>
                <td>4</td>
                <td>87</td>
                <td>
                    <a class="btn btn-default" href="/admin/disciplinas/ver" role="button">
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection