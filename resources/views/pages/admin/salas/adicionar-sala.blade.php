@extends('layouts.admin')

@section('content-admin')
    <h2>Adicionar Sala</h2>

    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Cidade</label>
            <input type="text" class="form-control" id="cidade" placeholder="Cidade">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Sigla</label>
            <input type="text" class="form-control" id="sigla" placeholder="Sigla">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection