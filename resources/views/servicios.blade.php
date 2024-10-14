<x-app-layaout>

    @section('title', 'Nuestros Servicios')

    {{-- En este apartado irá la información relevante de los servicios --}}

        <style>
            .content-for-myself {
                width: 100%;
                display: flex;
                justify-content: space-between;
                align-items: stretch;
                margin-top: 2px;
                padding-left: 0;
                padding-right: 0;
                flex-direction: column;
            }
            
            .pagination-container {
                display: flex;
                justify-content: center;
                margin-top: 20px;
            }

            @media (min-width: 768px) {
                .content-for-myself {
                    flex-direction: row;
                }
            }

            .myself,
            .experience {
                flex: 1;
                padding: 40px;
                color: white;
                font-family: Arial, sans-serif;
                position: relative;
                margin: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: justify;
                transition: transform 0.3s ease, background-color 0.3s ease;
                background-color: #0d6efd;
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            }

            @media (min-width: 768px) {
                .myself {
                    clip-path: polygon(0 0, 100% 0, 95% 100%, 0 100%);
                }

                .experience {
                    clip-path: polygon(5% 0, 100% 0, 100% 100%, 0 100%);
                }
            }

            .myself:hover,
            .experience:hover {
                transform: scale(1.05);
                background-color: #0056b3;
            }

            .myself h1,
            .experience h1 {
                color: black;
                font-size: 24px;
                margin-bottom: 10px;
            }

            .myself p,
            .experience p {
                color: white;
                font-size: 16px;
                margin: 0;
            }

            /* EXTERNOS */
            .floating-tooltip {
                position: fixed;
                top: 50%;
                right: 15px;
                transform: translateY(-50%);
                background-color: #ffffff;
                color: #fff;
                padding: 10px 5px;
                border-radius: 5px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
                z-index: 1000;
            }

            .floating-tooltip .nav {
                flex-direction: column;
                gap: 10px;
                align-items: center;
            }

            .floating-tooltip .nav .ms-3 {
                margin-left: 0;
            }

            .floating-tooltip .nav .text-body-secondary {
                color: #fff;
            }

            .floating-tooltip .nav .text-body-secondary:hover {
                color: #ccc;
            }
            
        .observatorio {
            display: flex;
            background-color: #005f8f;
            color: #fff;
            box-sizing: border-box;
            justify-content: space-between;
            height: auto;
        }

        .observatorio .left-section {
            flex: 1;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .observatorio .top-section {
            display: flex;
            align-items: center;
            margin-bottom: 10%;
        }

        .observatorio .title {
            background-color: #014466;
            text-align: center;
            width: 33%;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .observatorio .sustainable-goals {
            display: flex;
            align-items: center;
            margin-left: 0;
        }

        .observatorio .sustainable-goals img {
            width: 7vw;
            height: 120px;
        }

        .observatorio .content {
            margin-top: 20px;
            margin-left: 10%;
            margin-right: 10%;
            text-align: left;
        }

        .observatorio .content h1 {
            display: flex;
            align-items: center;
            margin: 0;
        }

        .observatorio .content .h1-icon {
            margin-right: 20px;
            flex-shrink: 0;
        }

        .full-text_ob {
            font-size: 49px;
            line-height: 1.2;
        }

        .highlight {
            color: #ffffff;
            font-weight: bold;
        }

        .observatorio .content p {
            font-size: 1.6em;
            line-height: 1.5;
            text-align: justify;
        }

        .image {
            flex: 1;
            display: flex;
            /*align-items: center;*/
            justify-content: center;
            overflow: hidden;
        }

        .image img {
            width: 100%;
            max-height: 101vh;
            padding-left: 5%;
        }

        .image-bg {
            background: url('/vistas/imagenes/aguafondo.avif') no-repeat center center/cover;
            padding: 20px;
            color: #333;
            text-align: center;
            min-height: 200px;
            height: 90vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-top: 40px;
            font-size: 1.6em;
        }

        .image-bg img {
            margin-bottom: 10px;
            max-width: 100%;
            height: auto;
        }


            @media (max-width: 768px) {
                .floating-tooltip {
                    top: auto;
                    bottom: 10px;
                    right: 10px;
                    transform: none;
                }
            }

            @media (max-width: 768px) {
                .floating-tooltip {
                    top: auto;
                    bottom: 10px;
                    right: 10px;
                    transform: none;
                }

                .social-icon:first-child {
                    display: none;
                }
                
                            .observatorio .title {
                background-color: #005f8f;
                text-align: center;
                width: 100%;
                height: 160px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0;
            }

            .image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                padding-left: 0;
            }

            .observatorio {
                flex-direction: column;
                align-items: center;
            }

            .observatorio .top-section {
                flex-direction: column;
                align-items: center;
            }

            .observatorio .sustainable-goals {
                justify-content: center;
                margin-left: 0;
            }

            .observatorio .sustainable-goals img {
                margin-bottom: 10px;
                width: 33.4vw;
            }

            .image {
                margin-top: 20px;
                max-width: 100%;
            }

            .observatorio .content h1 {
                font-size: 2.2em;
                text-align: center;
                display: inline-table;
                margin-right: 6px;
            }

            .observatorio .content h1 .h1-icon {
                
                margin-right: 10px;
                padding-bottom: 4%;
            }

            .observatorio .content p {
                font-size: 1.2em;
                text-align: center;
            }

            .full-text_ob {
                padding-right:4px;
                font-size:45px;
            }

            }

        </style>


    <section class="observatorio">
        <div class="left-section">
            <div class="top-section">
                <div class="title">
                    <h2>NUESTROS SERVICIOS</h2>
                </div>
                <div class="sustainable-goals">
                    <img src="{{ asset('SICA/img/objetivos_logo.jpg') }}" alt="Objetivos de Desarrollo Sostenible (ODS)">
                    <img src="{{ asset('SICA/img/objetivo6.jpg') }}" alt="Objetivo 6: Agua Limpia y Saneamiento">
                    <img src="{{ asset('SICA/img/objetivo11.jpg') }}" alt="Objetivo 11: Ciudades y Comunidades Sostenibles">
                </div>
            </div>
            <div class="content">
                <h1 class="observatorio-title">
                    <img src="{{ asset('SICA/img/water.png') }}" alt="Gota de agua" class="h1-icon">
                    <span class="full-text_ob">SERVICIOS INDUSTRIALES <span >DEL CARIBE</span></span>
                </h1>
                <br>
                <p>Puedes consultar algunos de los servicios con los que contamos y estaremos siempre encantados de ayudarte.</p>
            </div>
        </div>
        <div class="image">
            <img src="{{ env('APP_URL') . '/SICA/img/MANTENIMIENTO_PLANTA_EMERGENCIA/Planta_31.jpeg'}}" alt="LOGO DE SICA">
        </div>
    </section>

    <div class="content-for-myself">
        <div class="myself">
            <div>
                <h1>NUESTROS SERVICIOS</h1>
                <p>Todos los servicios que manejamos, son atendidos
                    por los profesionales mejor preparados que puedes encontrar en el mercado,
                    trabajamos en base a competencias y estamos felices de que decidas confiar en nosotros,
                    si te interesa saber más acerca de cada uno de nuestros servicios estás en el lugar correcto.</p>
            </div>
        </div>
        <div class="experience">
            <div>
                <h1>GARANTIZAMOS</h1>
                <p>Servicios Industriales del Caribe nos preocupamos por la completa satisfacción
                    de todos y cada uno de nuestros clientes, por lo cuál estamos comprometidos en
                    brindar un servicio completo y dedicado, para nosotros lo más importante es su
                    satisfacción y el profesionalismo en cada uno de nuestros servicios.
                </p>
            </div>
        </div>
    </div>

    <br>

    @foreach ($serviciosPorCategoria as $categoria => $servicios)
        <h2 class="section-title" style="text-transform: uppercase;">{{ $categoria }}</h2>
        <br>
        <x-card_for_service :servicios="$servicios"> </x-card_for_service>
    @endforeach

    <div class="pagination-container">
        {{ $paginacion->links('vendor.pagination.custom') }}
    </div>

    <div id="floating-tooltip" class="floating-tooltip">
        <ul class="nav col-md-4">
            <li class="social-icon" style="margin-left: 5px; margin-right: 5px"><a class="text-body-secondary" href="#"><i class="fab fa-instagram fa-2x"></i></a></li>
            <li class="social-icon" style="margin-left: 5px; margin-right: 5px"><a class="text-body-secondary" href="https://wa.me/9982428928"><i class="fab fa-whatsapp fa-2x"></i></a></li>
            <li class="social-icon" style="margin-left: 5px; margin-right: 5px"><a class="text-body-secondary" href="https://www.facebook.com/profile.php?id=61561158332942"><i class="fab fa-facebook fa-2x"></i></a></li>
        </ul>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tooltip = document.getElementById('floating-tooltip');

            // Mostrar y ocultar tooltip al pasar el mouse
            tooltip.addEventListener('mouseover', function() {
                tooltip.style.transform = 'translateY(-50%) translateX(-10px)';
            });

            tooltip.addEventListener('mouseout', function() {
                tooltip.style.transform = 'translateY(-50%)';
            });
        });

    </script>


</x-app-layaout>
