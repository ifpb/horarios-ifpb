@extends('layouts.app')

@section('title', 'Laboratórios')

@section('content')
    <h1>Laboratórios</h1>

    <input type="text" aria-label="Digite algo para filtrar" placeholder="Digite algo para filtrar" class="search-input-filter">

    <table class="courses tableFront">
        <thead>
            <tr>
                <th>Sala de aula</th>
                <th>Abreviação</th>
                <th>Bloco</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classrooms as $classroom)
                <tr>
                    <td><a href="{{ $classroom->url() }}" title="{{ $classroom->name }}">{{ $classroom->name }}</a></td>
                    <td>{{ $classroom->initials }}</td>
                    <td>{{ $classroom->block->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('additional-css-js')
    <script type="text/javascript">
        jQuery(document).ready(function() {
            dT = $('.courses').DataTable({
                retrieve: true
            })

            $('.search-input-filter').keyup(function () {
                dT.search($(this).val()).draw();
            })
        });
    </script>
@endsection