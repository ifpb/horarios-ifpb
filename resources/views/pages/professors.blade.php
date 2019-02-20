@extends('layouts.app')

@section('title', 'Professores')

@section('content')
    <h1>Professores</h1>

    <input type="text" aria-label="Digite algo para filtrar" placeholder="Digite algo para filtrar" class="search-input-filter">

    <table class="courses tableFront">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Apelio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($professors as $professor)
                <tr>
                    <td><a href="{{ $professor->url() }}" title="{{ $professor->name }}">{{ $professor->name }}</a></td>
                    <td>{{ $professor->initials }}</td>
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