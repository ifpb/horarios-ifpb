@extends('layouts.admin')

@section('content-admin')
    <h2>Unidade: {{ $teachingUnit->name }}</h2>

    <a class="btn btn-default mb-5" href="{{ route('teachingunits.edit', $teachingUnit->id) }}" role="button">
        <span class="glyphicon glyphicon-edit"></span>
        Editar Unidade
    </a>

    <a class="btn btn-danger mb-5" href="#" onClick="createWarning('{{ route('teachingunits.destroy', $teachingUnit->id) }}');return false;" role="button">
        <span class="glyphicon glyphicon-remove"></span>
        Remover Unidade
    </a>

    <form>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" value="{{ $teachingUnit->name }}" disabled>
        </div>
        <div class="form-group">
            <label for="initials">Abreviação</label>
            <input type="text" class="form-control" id="initals" value="{{ $teachingUnit->initials }}" disabled>
        </div>
    </form>

    {{--TODO: Dinamizar exibição de cursos e professores--}}
    <hr />
    <h2 class="mb-3">Cursos</h2>

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
                <td>Redes de Computadores</td>
                <td>CST REDES</td>
                <td>
                    <a class="btn btn-default" href="/admin/cursos/ver" role="button">
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

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