@extends('layouts.admin')

@section('content-admin')
    <h2>Nível: {{ $educationLevel->name }}</h2>

    <a class="btn btn-default mb-5" href="{{ route('educationlevels.edit', $educationLevel->id) }}" role="button">
        <span class="glyphicon glyphicon-edit"></span>
        Editar Nível
    </a>

    <a class="btn btn-danger mb-5" href="#" onClick="createWarning('{{ route('educationlevels.destroy', $educationLevel->id) }}');return false;" role="button">
        <span class="glyphicon glyphicon-remove"></span>
        Remover Nível
    </a>

    <form>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" value="{{ $educationLevel->name }}" disabled>
        </div>
    </form>

    {{--TODO: Dinamizar exibição de cursos--}}

    <hr>
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
@endsection