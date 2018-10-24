@extends('layouts.admin')

@section('content-admin')
    <h2>Adicionar Vínculo</h2>

    <form>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" placeholder="Nome (ex: Integral)">
        </div>
        <div class="form-group">
            <label for="">Horas Semanais</label>
            <input type="text" class="form-control" placeholder="Número de Horas">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Vínculo</button>
    </form>
@endsection