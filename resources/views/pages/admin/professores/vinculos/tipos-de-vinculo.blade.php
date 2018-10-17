@extends('layouts.admin')

@section('content-admin')
    <h2>Tipos de Vínculo</h2>

    <div class="flex mb-5 justify-between">
        <a class="btn btn-default" href="/admin/professores/vinculos/adicionar" role="button">
            <span class="glyphicon glyphicon-plus"></span>
            Adicionar Tipo de Vínculo
        </a>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Horas Semanais</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Integral</td>
                    <td>40h</td>
                    <td>
                        <a class="btn btn-default" href="/admin/professores/vinculos/ver" role="button">
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
                    <td>Parcial</td>
                    <td>20h</td>
                    <td>
                        <a class="btn btn-default" href="/admin/professores/vinculos/ver" role="button">
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