@extends('layouts.admin')

@section('content-admin')
    <h2>Editar Professor</h2>

    @include('partials.list-errors-form')

    <form method="POST" action="{{ route('professors.update', $professor->id) }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="teaching_unit_id">Unidade de ensino</label>
            <select name="teaching_unit_id" class="form-control" required>
                @foreach($teachingUnits as $teachingUnit)
                    <option value="{{ $teachingUnit->id }}" @if(old('teaching_unit_id', $professor->teaching_unit_id) == $teachingUnit->id) {{ 'selected' }} @endif>{{ $teachingUnit->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="active">Ativo</label>
            <select name="active" class="form-control" required>
                <option value="1" @if($professor->active) selected @endif>Sim</option>
                <option value="0" @if(!$professor->active) selected @endif>Não</option>
            </select>
        </div>
        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $professor->name) }}" required minlength="2">
        </div>
        <div class="form-group {!! $errors->has('nickname') ? 'has-error' : '' !!}">
            <label for="nickname">Apelido</label>
            <input type="text" id="nickname" name="nickname" class="form-control" value="{{ old('nickname', $professor->nickname) }}" placeholder="Apelido (Ex: Edu Costa)" required maxlength="20">
        </div>
        <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $professor->email) }}" placeholder="E-mail (Ex: educosta@ifpb.edu.br)">
        </div>
        <div class="form-group {!! $errors->has('phone') ? 'has-error' : '' !!}">
            <label for="phone">Telefone</label>
            <input type="number" id="phone" name="phone" class="form-control" value="{{ old('phone', $professor->phone) }}" placeholder="Telefone (Ex: 83999998888)">
            <span id="helpBlock" class="help-block">Digite o DDD sem 0 seguido do número (Ex: 83999999999)</span>
        </div>
        <div class="form-group">
            <label for="employment_bond_id">Vínculo Empregatício</label>
            <select name="employment_bond_id" class="form-control" required>
                @foreach($employmentBonds as $employmentBond)
                    <option value="{{ $employmentBond->id }}" @if(old('employment_bond_id', $professor->employment_bond_id) == $employmentBond->id) {{ 'selected' }} @endif>{{ $employmentBond->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="employment_type_id">Regime Empregatício</label>
            <select name="employment_type_id" class="form-control" required>
                @foreach($employmentTypes as $employmentType)
                    <option value="{{ $employmentType->id }}" @if(old('employment_type_id', $professor->employment_type_id) == $employmentType->id) {{ 'selected' }} @endif>{{ $employmentType->name }} ({{ $employmentType->hours_week }}h/semana)</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="flex" for="">Disponibilidade</label>
            @foreach($days as $day)
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox1" name="days[]" value="{{ $day->id }}" @if(is_array(old('days', $professor->days)) && in_array($day->id, old('days', $professor->days))) checked @endif> {{ $day->name }}
                </label>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary mt-5">Atualizar Professor</button>
    </form>
@endsection