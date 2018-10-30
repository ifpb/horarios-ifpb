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

    <hr />
    <h2 class="mb-3">Professores</h2>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Ativo</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employmentBond->professors as $professor)
                <tr>
                    <td>{{ $professor->id }}</td>
                    <td>{{ $professor->name }}</td>
                    <td>{{ $professor->nickname }}</td>
                    <td>@if($professor->active) Sim @else Não @endif</td>
                    <td>
                        <a class="btn btn-default" href="{{ route('professors.show', $professor->id) }}" role="button">
                            <span class="glyphicon glyphicon-eye-open"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection