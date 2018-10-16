@extends('layouts.app')

@section('content')
    <h1>Painel de Administração</h1>

    <div class="mt-4 flex flex-col md:flex-row">
        <div class="md:w-1/5 menu">
            @include('partials.menu-admin')
        </div>

        <div class="mt-2 md:ml-2 md:mt-0 md:flex-1">
            @yield('content_admin')
        </div>
    </div>

@endsection
