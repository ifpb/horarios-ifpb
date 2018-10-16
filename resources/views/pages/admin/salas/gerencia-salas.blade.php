@extends('layouts.admin')

@section('content-admin')
    <h2>Gerenciamento de Salas</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="#" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Sala
        </a>

        <div class="input-group w-1/2 md:w-1/2">
            <input type="email" class="form-control" placeholder="Digite o nome de uma sala">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">Buscar</button>
            </span>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Abreviação</th>
                    <th>Tipo</th>
                    <th>Capacidade</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Informática 28 - Conforto Ambiental</td>
                    <td>INFO 28</td>
                    <td>Sala</td>
                    <td>0</td>
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
                <tr>
                    <td>Laboratório 06</td>
                    <td>LAB 06</td>
                    <td>Lab</td>
                    <td>30</td>
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