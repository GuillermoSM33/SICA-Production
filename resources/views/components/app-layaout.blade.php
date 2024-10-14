<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="facebook-domain-verification" content="whixho0ql1zunl7ehlxj942u1nszyg" />

    {{-- Área de links --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('SICA/img/water.png') }}" type="image/png">

    {{-- Estilo de la vista --}}
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        .logo-actual {
            height: 70px;
            width: 300px
        }

        .content {
            flex: 1 0 auto;
        }

        .ms-2 {
            margin-left: 1rem !important;
        }

        .navbar-nav .nav-link.active,
        .dropdown-menu .dropdown-item.active {
            background-color: #51abcb;
            color: #fff;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: bold;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        .navbar-nav .nav-link,
        .dropdown-menu .dropdown-item {
            padding: 10px 20px;
            margin: 0 0px;
            border-radius: 8px;
            color: #001F54;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        .navbar-nav .nav-link:hover,
        .dropdown-menu .dropdown-item:hover {
            background-color: #51abcb;
            color: #fff;
            border-radius: 8px;
        }

        .bg-body-tertiary {
            background-color: #d5eef8 !important;
        }

        .container-for-carousel {
            position: relative;
            width: 320px;
            margin: 100px auto 0;
            perspective: 1000px;
            z-index: 10;
        }

        .carousel {
            position: absolute;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            animation: rotate360 60s infinite linear;
            z-index: 10;
        }

        .carousel__face {
            position: absolute;
            width: 300px;
            height: 187px;
            top: 20px;
            left: 10px;
            right: 10px;
            background-size: cover;
            box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0.5);
            display: flex;
        }

        .for-carousel {
            margin: auto;
            font-size: 2rem;
            color: white;
        }

        .carousel__face:nth-child(1) {
            background-image: url("{{ env('APP_URL') . '/SICA/img/CAROUSEL/Compromiso.jpeg'}}");
            transform: rotateY(0deg) translateZ(430px);
        }

        .carousel__face:nth-child(2) {
            background-image: url("{{ env('APP_URL') . '/SICA/img/CAROUSEL/carousel7.jpeg'}}");
            transform: rotateY(51.43deg) translateZ(430px);
        }

        .carousel__face:nth-child(3) {
            background-image: url("{{ env('APP_URL') . '/SICA/img/CAROUSEL/carousel8.jpg'}}");
            transform: rotateY(102.86deg) translateZ(430px);
        }

        .carousel__face:nth-child(4) {
            background-image: url("{{ env('APP_URL') . '/SICA/img/CAROUSEL/Planta_31.jpeg'}}");
            transform: rotateY(154.29deg) translateZ(430px);
        }

        .carousel__face:nth-child(5) {
            background-image: url("{{ env('APP_URL') . '/SICA/img/CAROUSEL/Metalica_15.jpeg'}}");
            transform: rotateY(205.72deg) translateZ(430px);
        }

        .carousel__face:nth-child(6) {
            background-image: url("{{ env('APP_URL') . '/SICA/img/CAROUSEL/portada_valvula.jpeg'}}");
            transform: rotateY(257.15deg) translateZ(430px);
        }

        .carousel__face:nth-child(7) {
            background-image: url("{{ env('APP_URL') . '/SICA/img/CAROUSEL/carousel6.jpeg'}}");
            transform: rotateY(308.58deg) translateZ(430px);
        }

        @keyframes rotate360 {
            from {
                transform: rotateY(0deg);
            }

            to {
                transform: rotateY(-360deg);
            }
        }

        .footer {
            flex-shrink: 0;
        }

        .container-fluid {
            padding: 0;
            max-width: 100%;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        @media (max-width: 768px) {
            #navbarSupportedContent.show #searchForm {
                display: flex !important;
                margin-bottom: 12px;
                margin-left: 8px;
                margin-right: 10px;
            }

            .navbar-collapse {
                justify-content: space-between;
            }

            .navbar-brand {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .navbar-brand img {
                height: 60px;
                width: 230px;
            }

            .navbar-brand span {
                font-size: 14px;
                text-align: center;
            }

            .navbar-toggler {
                margin-top: 8px;
                margin-right: 4%;
            }

            .logo-footer {
                height: 60px;
                width: 49px;
                margin-right: 10px;
            }
        }

        @media (min-width: 992px) {
            .navbar-collapse {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .navbar-nav {
                margin: 0 auto;
                border-radius: 8px;
                height: 55px;
                align-items: center;
                display: flex;
                gap: 20px;
                flex-grow: 1;
                font-size: 18px;
                justify-content: center;
            }

            .navbar-brand {
                margin-right: auto;
            }

            form.d-flex {
                flex-grow: 0;
                margin-left: auto;
                margin-right: auto;
            }
        }

        .section-title {
            margin-left: 6%;
        }

        .navbar-brand {
            padding-left: 20px;
        }

        .navbar-collapse .form-control {
            margin-right: 20px;
        }

        /* Estilos específicos */

        .card-shrimp {
            width: 100%;
            height: 300px;
            perspective: 1000px;
        }

        .card-inner-shrimp {
            width: 100%;
            height: 100%;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.999s;
        }

        .card-shrimp:hover .card-inner-shrimp {
            transform: rotateY(180deg);
        }

        .card-front-shrimp,
        .card-back-shrimp {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 20px;
        }

        .card-front-shrimp img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
        }

        .card-front-shrimp {
            background-color: #ffffff;
        }

        .card-back-shrimp {
            background-color: #F08A5D;
            color: #fff;
            padding: 20px;
            box-sizing: border-box;
            transform: rotateY(180deg);
        }

        #suggestions {
            max-height: 200px;
            overflow-y: auto;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            position: absolute;
            z-index: 1000;
            width: calc(100% - 30px);
            right: 15px;
        }

        #suggestions .list-group-item {
            padding: 8px 12px;
            font-size: 14px;
            cursor: pointer;
        }

        #suggestions .list-group-item:hover {
            background-color: #f0f0f0;
            color: #000;
        }

    </style>

</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img class="logo-actual" src="{{ env('APP_URL') . '/SICA/img/logo_actualizado.jpg'}}" alt="SICA Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('nosotros') ? 'active' : '' }}" href="/nosotros">Nosotros</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Request::is('servicios') || Request::is('osmosis') || Request::is('mantenimiento_MBA') || Request::is('PTAR') || Request::is('desgacificadora') || Request::is('electricos') || Request::is('piscinas') || Request::is('purificar') || Request::is('limpieza') || Request::is('otros') || Request::is('constante') || Request::is('enfriamiento') ? 'active' : '' }}" href="/servicios" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ Request::is('servicios') ? 'active' : '' }}" href="/servicios">Todos nuestros servicios</a></li>
                            <li><a class="dropdown-item {{ Request::is('osmosis') ? 'active' : '' }}" href="/osmosis">Osmosis</a></li>
                            <li><a class="dropdown-item {{ Request::is('mantenimiento_MBA') ? 'active' : '' }}" href="/mantenimiento_MBA">Mantenimiento MBA</a></li>

                            <li><a class="dropdown-item {{ Request::is('PTAR') ? 'active' : '' }}" href="/PTAR">Servicios de Plantas de Aguas Residuales (PTAR)</a></li>

                            <li><a class="dropdown-item {{ Request::is('desgacificadora') ? 'active' : '' }}" href="/desgacificadora">Torre Desgacificadora</a></li>

                            <li><a class="dropdown-item {{ Request::is('constante') ? 'active' : '' }}" href="/constante">Servicio de mantenimiento de presión constante</a></li>

                            <li><a class="dropdown-item {{ Request::is('enfriamiento') ? 'active' : '' }}" href="/enfriamiento">Mantenimiento a Torre de Enfriamiento</a></li>

                            <li><a class="dropdown-item {{ Request::is('electricos') ? 'active' : '' }}" href="/electricos">Servicios Eléctricos</a></li>

                            <li><a class="dropdown-item {{ Request::is('piscinas') ? 'active' : '' }}" href="/piscinas">Mantenimiento de Piscinas y Balance de Agua</a></li>

                            <li><a class="dropdown-item {{ Request::is('purificar') ? 'active' : '' }}" href="/purificar">Purificadoras de Agua</a></li>

                            <li><a class="dropdown-item {{ Request::is('limpieza') ? 'active' : '' }}" href="/limpieza">Servicios de Mantenimiento y Limpieza</a></li>

                            <li><a class="dropdown-item {{ Request::is('otros') ? 'active' : '' }}" href="/otros">Otros Servicios</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contacto') ? 'active' : '' }}" href="/contacto">Contacto</a>
                    </li>

                    @auth
                    @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('admin_sistema'))
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">Dashboard</a>
                    </li>
                    @endif
                    @endauth

                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Iniciar Sesión</a>
                    </li>
                    @endauth
                </ul>
                <form class="d-flex mt-3 mt-lg-0 position-relative" role="search" id="searchForm" action="{{ route('buscador') }}" method="GET">
                    <input class="form-control me-2" name="buscar_servicio" id="buscarServicio" type="search" placeholder="Buscar" aria-label="Buscar" autocomplete="off">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                    <div id="suggestions" class="list-group position-absolute w-100" style="z-index: 1000;"></div>
                </form>
            </div>
        </div>
    </nav>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <div class="content">
        {{ $slot }}
    </div>

    {{-- Pié de página --}}
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-4 border-top bg-light">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <div class="col-md-4 d-flex align-items-center">
                <a class="navbar-brand" href="/">
                    <img class="logo-footer" src="{{ env('APP_URL') . '/SICA/img/SICA_VECTORIZADO_transparent.png'}}" alt="SICA Logo" style="height: 60px;width: 49px;">
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2024 SICA, Inc</span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="https://wa.me/9982428928"><i class="fab fa-whatsapp fa-2x"></i></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><i class="fab fa-instagram fa-2x"></i></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="https://www.facebook.com/profile.php?id=61561158332942"><i class="fab fa-facebook fa-2x"></i></a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.getElementById('buscarServicio').addEventListener('input', function() {
            let query = this.value;

            if (query.length > 1) {
                fetch(`/autocomplete?q=${query}`)
                    .then(response => response.json())
                    .then(data => {
                        let suggestions = document.getElementById('suggestions');
                        suggestions.innerHTML = '';

                        data.forEach(item => {
                            let suggestionItem = document.createElement('a');
                            suggestionItem.classList.add('list-group-item', 'list-group-item-action');
                            suggestionItem.textContent = item.categoria;
                            suggestionItem.href = '#';
                            suggestionItem.addEventListener('click', function(e) {
                                e.preventDefault();
                                document.getElementById('buscarServicio').value = item.categoria;
                                suggestions.innerHTML = ''; // Borra las sugerencias una vez seleccionado
                            });
                            suggestions.appendChild(suggestionItem);
                        });
                    });
            } else {
                document.getElementById('suggestions').innerHTML = '';
            }
        });

        // Ocultar las sugerencias cuando se hace clic fuera del buscador
        document.addEventListener('click', function(e) {
            let searchForm = document.getElementById('searchForm');
            let suggestions = document.getElementById('suggestions');

            // Si el clic no está dentro del formulario de búsqueda, ocultar las sugerencias
            if (!searchForm.contains(e.target)) {
                suggestions.innerHTML = '';
            }
        });

        // También oculta las sugerencias cuando el campo pierde el enfoque
        document.getElementById('buscarServicio').addEventListener('blur', function() {
            setTimeout(function() {
                document.getElementById('suggestions').innerHTML = '';
            }, 200); // Se da un pequeño delay para permitir que el clic en las sugerencias funcione correctamente
        });

    </script>
</body>
</html>
