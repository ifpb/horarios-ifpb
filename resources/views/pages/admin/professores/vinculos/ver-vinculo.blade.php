@extends('layouts.admin')

@section('content-admin')
    <h2>Vinculo: {{ $employmentBond->name }}</h2>

    <a class="btn btn-default mb-5" href="{{ route('employmentbonds.edit', $employmentBond->id) }}" role="button">
        <span class="glyphicon glyphicon-edit"></span>
        Editar Vínculo
    </a>

    <a class="btn btn-danger mb-5" href="#" onClick="createWarning('{{ route('employmentbonds.destroy', $employmentBond->id) }}');return false;" role="button">
        <span class="glyphicon glyphicon-remove"></span>
        Remover Vínculo
    </a>

    <form>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" id="name" class="form-control" value="{{ $employmentBond->name }}" disabled>
        </div>
    </form>

    {{--TODO: Dinamizar Professores nos Vínculos--}}
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