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


    <hr />
    <h2 class="mb-3">Cursos</h2>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Abreviação</th>
                <th>Períodos</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teachingUnit->courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->initials }}</td>
                    <td>{{ $course->periods }}</td>
                    <td>
                        <a class="btn btn-default" href="{{ route('courses.show', $course->id) }}" role="button">
                            <span class="glyphicon glyphicon-eye-open"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

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
            @foreach($teachingUnit->professors as $professor)
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