@extends('layouts.app')

@section('content')
    <h1>Painel de Administração</h1>

    <div class="mt-4 flex flex-col md:flex-row">
        <div class="md:w-1/5 menu">
            @include('partials.menu-admin')
        </div>

        <div class="content-admin mt-2 md:ml-4 md:mt-0 md:flex-1">
            @yield('content-admin')
        </div>
    </div>
@endsection

@section('additional-css-js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.5/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('js/admin-functions.js') }}"></script>

    {{--DataTables--}}
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
@endsection