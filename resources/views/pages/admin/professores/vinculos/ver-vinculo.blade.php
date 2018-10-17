@extends('layouts.admin')

@section('content-admin')
    <h2>Vínculo: Integral</h2>

    <a class="btn btn-default mb-5" href="#" onClick="createWarning('#');return false;" role="button">
        <span class="glyphicon glyphicon-minus"></span>
        Remover Tipo de Vínculo
    </a>

    <form>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" placeholder="Nome (ex: Integral)" disabled>
        </div>
        <div class="form-group">
            <label for="">Horas Semanais</label>
            <input type="text" class="form-control" placeholder="Número de Horas"disabled>
        </div>
    </form>

    <hr />
    <h2 class="mb-3">Professores</h2>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Abreviação</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>José Quaresma Filho</td>
                <td>Zé Filho</td>
                <td>
                    <a class="btn btn-default" href="/admin/professores/ver" role="button">
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection