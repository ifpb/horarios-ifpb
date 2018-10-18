@extends('layouts.admin')

@section('content-admin')
    <h2>Gerenciamento de Salas</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="/admin/salas/adicionar" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Sala
        </a>
    </div>

    <div class="alert alert-success" role="alert">Nova sala adicionada com sucesso!</div>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Abreviação</th>
                    <th>Tipo</th>
                    <th>Capacidade</th>
                    <th>Bloco</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Informática 28 - Conforto Ambiental</td>
                    <td>INFO 28</td>
                    <td>Sala</td>
                    <td>0</td>
                    <td><a href="#">BLOCO INFO</a></td>
                    <td>
                        <a class="btn btn-default" href="/admin/salas/ver" role="button">
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
                    <td>Laboratório 06</td>
                    <td>LAB 06</td>
                    <td>Lab</td>
                    <td>30</td>
                    <td><a href="#">BLOCO INFO</a></td>
                    <td>
                        <a class="btn btn-default" href="#" role="button">
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