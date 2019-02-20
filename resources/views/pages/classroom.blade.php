@extends('layouts.app')

@section('title', $classroom->name)

@section('content')
    <h1>{{ $classroom->name }}</h1>

    @include('partials.table-days-times-classroom', compact('days', 'times', 'dayTimeReservations'))
@endsection