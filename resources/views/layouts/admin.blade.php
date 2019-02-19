@extends('layouts.app')

@section('content')
    <h1>Painel de Administração</h1>

    <div class="mt-4 flex flex-col md:flex-row">
        <div class="md:w-1/5 menu">
            @include('partials.menu-admin')
        </div>

        <div class="mt-2 md:ml-4 md:mt-0 md:flex-1">
            @include('partials.alerts')
            <div class="content-admin">
                @yield('content-admin')
            </div>

        </div>
    </div>
@endsection

@section('additional-css-js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.5/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('js/admin-functions.js') }}"></script>
@endsection