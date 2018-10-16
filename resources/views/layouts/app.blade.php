<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Horários IFPB - Instituto Federal da Paraíba') }}</title>

    <!-- Styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
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
                <a href="#" class="button-main-menu">
                    <i>
                        <svg width="38" height="22" xmlns="http://www.w3.org/2000/svg"><g fill="#FFF" fill-rule="nonzero"><path d="M19.496 14.585L8 11v5.987C8 19.757 13.149 22 19.5 22c6.35 0 11.5-2.244 11.5-5.012 0-.022-.007-.044-.007-.065V11l-11.497 3.585z"/><path d="M0 7.143l4.05 1.415.345-.722 1.488-.124.212.216-1.277.296-.186.538s-2.884 5.89-2.46 8.772c0 0 1.8 1.049 3.599 0l.478-7.879V9l2.678-.59-.19.454-1.996.635.923.322L19 13.231l11.336-3.41L38 7.143 19 0 0 7.143z"/></g></svg>
                    </i> Cursos
                </a>
                <a href="#" class="button-main-menu">
                    <i>
                        <svg width="16" height="22" xmlns="http://www.w3.org/2000/svg"><g fill="#FFF" fill-rule="nonzero"><path d="M15.608 17.142l-4.222-7.799V2.607h1.022c.73 0 1.321-.583 1.321-1.303S13.138 0 12.41 0h-8.85A1.312 1.312 0 0 0 2.27 1.305c0 .708.573 1.285 1.287 1.303h1.056v6.736L.392 17.142a3.28 3.28 0 0 0 .082 3.254A3.373 3.373 0 0 0 3.344 22h9.312c1.169 0 2.269-.615 2.87-1.604a3.28 3.28 0 0 0 .082-3.254zm-.862 2.792a2.456 2.456 0 0 1-2.09 1.168H3.344a2.456 2.456 0 0 1-2.09-1.168 2.388 2.388 0 0 1-.059-2.37l4.33-7.996v-6.96h4.95v6.96l4.33 7.997a2.388 2.388 0 0 1-.06 2.37z"/><path d="M8.275 10.961a1 1 0 1 0-.55-1.922 1 1 0 0 0 .55 1.922zM9.275 5.961a1 1 0 1 0-.55-1.922 1 1 0 0 0 .55 1.922zM10.79 12H5.21l-3.035 5.782a1.531 1.531 0 0 0 .036 1.485c.268.455.75.733 1.27.733h9.037c.521 0 1.003-.278 1.271-.733a1.53 1.53 0 0 0 .036-1.485L10.791 12zm-.877 4.942a1.5 1.5 0 1 1-.825-2.884 1.5 1.5 0 0 1 .825 2.884z"/></g></svg>
                    </i> Laboratórios
                </a>
                <a href="#" class="button-main-menu">
                    <i>
                        <svg width="23" height="23" xmlns="http://www.w3.org/2000/svg"><g fill="#FFF" fill-rule="nonzero"><path d="M21.491 0H9.709A.71.71 0 0 0 9 .71v5.007l.513-.6c.243-.285.564-.461.905-.534V1.419h10.364v9.27H10.418V9.136l-.32.373A1.647 1.647 0 0 1 9 10.078v1.32c0 .392.317.71.709.71h3.826l-1.944 8.83a.734.734 0 0 0 1.433.317l2.014-9.148h1.17l2.013 9.148a.733.733 0 1 0 1.433-.316l-1.944-8.832h3.781a.71.71 0 0 0 .709-.71V.71a.71.71 0 0 0-.709-.71z"/><path d="M16.273 4.175a.272.272 0 0 0-.354-.156l-4.17 1.485a.91.91 0 0 0-1.253.129L9.173 7.19 8 6.177c.008.083.025.165.025.25V8.63l.653.564a.91.91 0 0 0 1.29-.1l1.575-1.857 1.27-.75 3.343-1.972a.276.276 0 0 0 .117-.34zM5 5h-.79c-.606 0-1.138.294-1.477.742L.307 7.975a.92.92 0 0 0-.072 1.3l1.98 2.208a.921.921 0 0 0 1.37-1.228L2.222 8.732 4.16 7 3.03 8.532l1.105 1.232a1.65 1.65 0 1 1-1.78 2.661s.009 4.258.009 8.817a1.104 1.104 0 0 0 2.21 0v-6.58h.736v6.58c0 .318-.089.613-.23.874.185.143.416.23.667.23.61 0 1.105-.494 1.105-1.104 0-4.558.002-2.647.002-14.39C6.854 5.83 6.024 5 5 5zM3.172 4.066c.296.154.629.25.986.25s.69-.096.987-.25a2.148 2.148 0 0 0 1.17-1.908 2.158 2.158 0 0 0-4.315 0c0 .834.478 1.55 1.172 1.908z"/></g></svg>
                    </i> Salas
                </a>
                <a href="#" class="button-main-menu">
                    <i>
                        <svg width="26" height="26" xmlns="http://www.w3.org/2000/svg"><path d="M23.232 23.268v-.377h-.763l-.139-2.484-.415.162a6.311 6.311 0 0 1-1.671.41l-.776-7.035c.124-.914.287-2.308.35-3.737C19.924 7.761 20.291 0 13.25 0 6.209 0 6.402 6.48 6.402 6.48l.513 8.407-.635 6.114a6.23 6.23 0 0 1-2.078-.435l-.415-.161-.138 2.485h-.795v.377H.085v2.479h25.576v-2.479h-2.429v.001zm-3.623-1.612c.727 0 1.427-.111 2.127-.34l.07 1.25h-8.414c.041-.59.236-1.816 1.164-1.928.463-.057 1.057.141 1.768.369.894.29 2.005.649 3.285.649zm-2.765-1.159c.109-.709.315-2 .548-3.347l.502 3.645a14.128 14.128 0 0 1-1.05-.298zM7.814 5.676c1.529-.104 6.813-.584 6.949-2.293.504.928 3.17 3.266 4.229 3.42a5.623 5.623 0 0 1-4.128 4.846v1.958h.012l.709.338-2.229 4.017-2.185-4.142.557-.139v-2.09a5.62 5.62 0 0 1-3.944-5.364c.002-.185.011-.37.03-.551zm1.982 14.657l-.199.063a30.21 30.21 0 0 1-.955.289l.38-2.94c.293.991.577 1.937.774 2.588zm-5.414.983c.701.229 1.401.34 2.128.34 1.279 0 2.392-.359 3.286-.646.711-.229 1.303-.425 1.767-.369.924.109 1.122 1.336 1.164 1.926H4.313l.069-1.251z" fill="#FFF" fill-rule="nonzero"/></svg>
                    </i> Professores
                </a>
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
            <a href="http://www.acessoainformacao.gov.br/" class="flex items-center font-normal text-sm no-underline text-white hover:text-white w-48" title="Acesso à Informação - Governo Federal" target="_blank">
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
        Horário Acadêmico IFPB | Desenvolvimento: <a href="#" title="Jordan Miguel" target="_blank">Jordan Miguel</a>
    </div>


    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
