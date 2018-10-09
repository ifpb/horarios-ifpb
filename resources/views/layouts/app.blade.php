<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Horários IFPB - Instituto Federal da Paraíba') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="flex min-h-screen flex-col">
    <header>
        <div class="top-bar bg-grey-light">
            <div class="container flex justify-between text-sm items-center">
                <div class="last-updated hidden md:flex text-xs">
                    Última atualização por: Jordan Miguel às 23:15 de 18/09.
                </div>
                <div class="links flex justify-center w-full md:w-auto">
                    <a href="#">Acesso ao SUAP</a>
                    <a href="#">Site do IFPB</a>
                </div>
            </div>
        </div>
        <div class="header-main text-white pt-10">
            <div class="container md:flex md:justify-between md:items-center px-5 md:px-0">
                <div class="logo leading-tight">
                    <h4 class="font-light text-xs">Instituto Federal da Paraíba</h4>
                    <h1 class="font-extrabold text-3xl tracking-tight md:tracking-normal">Horário Acadêmico</h1>
                    <h4 class="font-light text-sm">MINISTÉRIO DA EDUCAÇÃO</h4>
                </div>
                <div class="mt-8 md:w-1/2 md:mt-0">
                    <input class="search-input" id="username" type="text" placeholder="Que curso, professor ou sala deseja encontrar?">
                </div>
            </div>

            <div class="container mt-10 flex flex-col md:flex-row">
                <a href="#" class="botao-menu-principal"><i>t</i> Cursos</a>
                <a href="#" class="botao-menu-principal"><i>t</i> Laboratórios</a>
                <a href="#" class="botao-menu-principal"><i>t</i> Salas</a>
                <a href="#" class="botao-menu-principal"><i>t</i> Professores</a>
            </div>
        </div>
    </header>
    <div class="breadcumb bg-grey-lighter text-sm py-2 px-3">
        <div class="container">
            <a href="#">Home</a>
            <span class="text-xs">></span>
            <a href="#">Horários</a>
        </div>
    </div>
    <div class="container py-3 px-2 md:px-0 flex-1">
        @yield('content')
    </div>
    <div class="bg-green-darker text-white py-5 px-5">
        <div class="container">
            <a href="http://www.acessoainformacao.gov.br/" class="flex items-center font-normal text-sm no-underline text-white" title="Acesso à Informação - Governo Federal" target="_blank">
                <svg width="45px" height="45px" viewBox="0 0 45 45" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <desc>Acesso a informação.</desc>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Horário-Mobile" transform="translate(-29.000000, -556.000000)">
                            <g id="Acesso-a-informação" transform="translate(0.000000, 535.000000)">
                                <g id="Acesso" transform="translate(29.000000, 21.000000)">
                                    <circle id="Oval" fill="#F6A800" cx="22.5" cy="22.5" r="22.5"></circle>
                                    <path d="M4.36187726,34 L2.25273475,40.0047825 C1.43417236,42.3290217 2.67097831,43.5658276 4.9952175,42.7472652 L11,40.6381227 L4.36187726,34 Z" id="Shape" fill="#F6A800"></path>
                                    <circle id="Oval" fill="#00692C" cx="22.5" cy="11.5" r="4.5"></circle>
                                    <path d="M22.5,18 C20.016,18 18,20.0894285 18,22.6639029 L18,34.3360971 C18,36.9105715 20.016,39 22.5,39 C24.984,39 27,36.9105715 27,34.3360971 L27,22.6639029 C27,20.0894285 24.984,18 22.5,18 Z" id="Shape" fill="#00692C"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <span class="ml-2">
                    Acesso à<br /> Informação
                </span>
            </a>
        </div>
    </div>
    <div class="py-3 text-sm text-center">
        Horário Acadêmico IFPB | Desenvolvimento: Jordan Miguel
    </div>


    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
