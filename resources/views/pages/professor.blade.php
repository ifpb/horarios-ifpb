@extends('layouts.app')

@section('title', $professor->name)

@section('content')
    <h1>{{ $professor->name }}</h1>

    {{--  TODO: Reiniciar datatables com paginação, muitos professores. --}}
    {{--  TODO: Exibir mais informações sobre o professor, como suas turmas, e-mail, etc.. --}}
    @include('partials.table-days-times-professor', compact('days', 'times', 'dayTimeReservations'))
@endsection