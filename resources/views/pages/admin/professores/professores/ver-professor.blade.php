@extends('layouts.admin')

@section('content-admin')
    <h2>Professor: {{ $professor->nickname }}</h2>

    <a class="btn btn-default mb-5" href="{{ route('professors.edit', $professor->id) }}" role="button">
        <span class="glyphicon glyphicon-edit"></span>
        Editar Professor
    </a>

    <a class="btn btn-danger mb-5" href="#" onClick="createWarning('{{ route('professors.destroy', $professor->id) }}');return false;" role="button">
        <span class="glyphicon glyphicon-remove"></span>
        Remover Professor
    </a>

    <form>
        <div class="form-group">
            <label for="teaching_unit_id">Unidade de ensino</label>
            <select name="teaching_unit_id" class="form-control" disabled>
                <option>{{ $professor->teachingUnit->name }}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="active">Ativo</label>
            <select name="active" class="form-control" disabled>
                <option>@if($professor->active) Sim @else Não @endif</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $professor->name }}" disabled>
        </div>
        <div class="form-group">
            <label for="nickname">Apelido</label>
            <input type="text" id="nickname" name="nickname" class="form-control" value="{{ $professor->nickname }}" disabled>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $professor->email }}" disabled>
        </div>
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="number" id="phone" name="phone" class="form-control" value="{{ $professor->phone }}" disabled>
        </div>
        <div class="form-group">
            <label for="employment_bond_id">Vínculo Empregatício</label>
            <select name="employment_bond_id" class="form-control" disabled>
                <option>{{ $professor->employmentBond->name }}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="employment_type_id">Regime Empregatício</label>
            <select name="employment_type_id" class="form-control" disabled>
                <option>{{ $professor->employmentType->name }} ({{ $professor->employmentType->hours_week }}h/semana)</option>
            </select>
        </div>
        <div class="form-group">
            <label class="flex" for="">Disponibilidade</label>
            @foreach($days as $day)
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox1" name="days[]" @if($professor->days->contains('id', $day->id)) checked @endif disabled> {{ $day->name }}
                </label>
            @endforeach
        </div>
    </form>

    <hr>
    <h2 class="mb-3">Turmas</h2>

    <div class="table-responsive">
        <table class="table dataTable">
            <thead>
            <tr>
                <th>id</th>
                <th>Disciplina</th>
                <th>Professor</th>
                <th>Ident.</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($professor->teachingClasses as $teachingClass)
                <tr>
                    <td>{{ $teachingClass->id }}</td>
                    <td>{{ $teachingClass->subject->name }}</td>
                    <td>{{ $teachingClass->professor->name }}</td>
                    <td>{{ $teachingClass->type->initials }}</td>
                    <td>
                        <a class="btn btn-default" href="{{ route('teachingclasses.show', $teachingClass->id) }}" role="button">
                            <span class="glyphicon glyphicon-eye-open"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <hr>
    <h2 class="mb-3">Horários</h2>
    @include('partials.tabela-dias-horarios-admin', compact('days', 'times', 'dayTimeReservations'))
@endsection

@section('custom-js')
    <script src="{{ URL::asset('js/admin/remove-reservation.js') }}"></script>
@endsection