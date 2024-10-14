<x-app-layaout>

    @section('title', 'Nosotros')

    <style>
    .card_our {
        --bg: #f7f7f8;
        --hover-bg: #FFE5F4;
        --hover-text: #E50087;
        max-width: 23ch;
        text-align: center;
        background: var(--bg);
        padding: 1.5em;
        padding-block: 1.8em;
        border-radius: 5px;
        position: relative;
        overflow: hidden;
        transition: .3s cubic-bezier(.6, .4, 0, 1), transform .15s ease;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 1em;
        margin: 1rem;
        text-decoration: none;
        color: inherit;
    }

    .card__body {
        color: #464853;
        line-height: 1.5em;
        font-size: 1em;
    }

    .card_our> :not(span) {
        transition: .3s cubic-bezier(.6, .4, 0, 1);
    }

    .card_our>strong {
        display: block;
        font-size: 1.4rem;
        letter-spacing: -.035em;
    }

    .card_our span {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: var(--hover-text);
        border-radius: 5px;
        font-weight: bold;
        top: 100%;
        transition: all .3s cubic-bezier(.6, .4, 0, 1);
    }

    .card_our:hover span {
        top: 0;
        font-size: 1.2em;
    }

    .card_our:hover {
        background: var(--hover-bg);
    }

    .card_our:hover>div,
    .card_our:hover>strong {
        opacity: 0;
    }

    .image-container {
        position: relative;
        text-align: center;
        color: white;
        width: 30%;
        margin: 0 1%;
    }

    .image-container img {
        width: 100%;
        height: auto;
        opacity: 0.8;
    }

    .text-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 1.5rem;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 1rem;
        border-radius: 5px;
    }

    .images-row {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        margin-bottom: 2rem;
    }

    .cards-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

        .monitoring-section {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 8px;
            margin: 20px;
            margin-left: 3%;
            margin-right: 3%;
        }

        .monitoring-section .text {
            flex: 2;
            padding-right: 20px;
        }

        .monitoring-section .text p {
            margin: 10px 0;
            font-size: 1.2em;
            line-height: 1.6;
            text-align: justify;
        }

        .monitoring-section .text h2 {
            background-color: #00c1f5;
            padding: 10px;
            color: #fff;
            border-radius: 8px 8px 0 0;
            margin: 0;
        }

        .monitoring-section .image {
            flex: 1;
            max-width: 40%;
        }

        .monitoring-section .image img {
            width: 100%;
            max-height: 500px;
            border-radius: 8px;
        }


    @media (max-width: 768px) {
        .image-container {
            width: 90%;
            margin: 1rem 0;
        }

        .text-overlay {
            font-size: 1.2rem;
        }

        .card_our {
            width: 90%;
        }
        
            .monitoring-section {
                flex-direction: column;
            }

            .monitoring-section .text {
                padding-right: 0;
            }

            .monitoring-section .image {
                max-width: 100%;
                margin-top: 20px;
            }

    }

    .descubre {
        padding-bottom: 20px;
    }

    </style>

    <section class="descubre" id="descubre">

        <div id="descubreCancun_titulo" style="padding-bottom: 30px; padding-top: 50px;" align="center">

            <div class="col-md">
                <h2 class="h1-custom" style="font-weight:bold;color: black;" aria-label="Descubre Cancun">Servicios Industriales Del Caribe</h2>
            </div>

            <div class="col-md">
                <hr class="hr" style="color: #743F5B;">
            </div>
        </div>

        <style type="text/css">
            .bg-cancun {
                animation: animate 60s ease-in-out infinite;
                background-attachment: fixed;
                background-size: cover;
                max-width: 100%;
                height: auto;
            }

            @keyframes animate {

                0%,
                100% {
                    background-image: url("{{ env('APP_URL') . '/SICA/img/CAROUSEL/carousel6.jpeg'}}");
                }

                25% {
                    background-image: url("{{ env('APP_URL') . '/SICA/img/CAROUSEL/carousel7.jpeg'}}");
                }

                50% {
                    background-image:url("{{ env('APP_URL') . '/SICA/img/CAROUSEL/carousel8.jpg'}}");
                }

                75% {
                    background-image:url("{{ env('APP_URL') . '/SICA/img/CAROUSEL/Planta_31.jpeg'}}");
                }

            }

        </style>

        <div id="descubreCancun" class="bg-cancun slide" style="max-height: 600px;padding-bottom: 30px; padding-top: 50px;">

            <div class="container">
                <div class="row justify-content-center justify-content-md-end">
                    <div class="col-12 col-sm-10 col-md-6 col-lg-5 col-xl-4 my-3 my-md-5 py-5 text-center">
                        <div class="rounded pb-4" style="background-color: white;opacity: 92%;">
                            <img src="{{ env('APP_URL') . '/SICA/img/SICA_VECTORIZADO_transparent.png'}}" style="margin-top: 20px; width: 30%" alt="logo-sica">
                            <h2 class="fw-700 color-0-visit mt-2 mb-3 lh-2">CONOCE <br><span>MÁS DE NOSOTROS</span></h2>
                            <a href="{{ env('APP_URL')}}" class="btn btn-custom"><span>SICA</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script type="text/javascript">
        $(window).on('load', function() {
            $('#informe2023').modal('show');
        });
    </script>

    <br>

    <div class="images-row">
        <div class="image-container">
            <img src="{{ env('APP_URL') . '/SICA/img/CAROUSEL/Planta_31.jpeg'}}" alt="Imagen de encabezado">
            <div class="text-overlay">Trabajos Asegurados</div>
        </div>
        <div class="image-container">
            <img src="{{ env('APP_URL') . '/SICA/img/REVISION_DIAGNOSTICO/membrana_portada.jpeg'}}" alt="Imagen de encabezado">
            <div class="text-overlay">Seguimiento Detallado</div>
        </div>
        <div class="image-container">
            <img src="{{ env('APP_URL') . '/SICA/img/CAROUSEL/carousel8.jpg'}}" alt="Imagen de encabezado">
            <div class="text-overlay">Compromiso Con Nuestros Clientes</div>
        </div>
    </div>

    <section class="monitoring-section">
        <div class="text">
            <h2>¿QUIÉNES SOMOS?</h2>
            <p>En Servicios Industriales del Caribe, nos enorgullece ser pioneros en el sureste
mexicano en el tratamiento del agua. Con más de dos décadas de experiencia, nos
hemos especializado en ofrecer soluciones integrales para la purificación y
reutilización del agua, promoviendo la sustentabilidad y el cuidado del medio
ambiente. En Servicios Industriales del Caribe, no solo nos dedicamos al tratamiento
del agua; somos una empresa comprometida con la excelencia y la innovación en
cada aspecto de nuestro trabajo. Nuestra pasión por el tratamiento del agua y la
promoción de un futuro sostenible impulsa cada una de nuestras acciones y
decisiones empresariales.</p>
            <p>En <strong>Servicios Industriales del Caribe, nuestra misión es proporcionar soluciones
innovadoras y sostenibles en el tratamiento del agua</strong>, superando las expectativas de
nuestros clientes y contribuyendo al bienestar del medio ambiente y las
comunidades que servimos.</p>
            <ul>
                <li><strong>Visión a Futuro</strong></li>
                <li><strong>Compromiso con la Calidad</strong></li>
                <li><strong>Innovación Constante</strong></li>
                <li><strong>Compromiso Social</strong></li>
                <li><strong>Valores Marcados</strong></li>
            </ul>
            <p>Puedes conversar con nosotros acerca de esto y más <a href="https://wa.me/9982428928">aquí</a>.</p>
        </div>
        <div class="image">
            <img src="{{ env('APP_URL') . '/SICA/img/BALANCE_AGUA/balance_portada.jfif'}}" alt="Imagen Balance de Agua">
        </div>
    </section>

    <div class="cards-container">
        <a href="https://www.facebook.com/profile.php?id=61561158332942" class="card_our">
            <div class="icon">
                <i class="fab fa-facebook fa-2x"></i>
            </div>
            <strong> Facebook </strong>
            <div class="card__body">
                Puedes comunicarte con nosotros en nuestro FB
            </div>
            <span>Siguenos</span>
        </a>

        <a href="#" class="card_our">
            <div class="icon">
                <i class="fab fa-instagram fa-2x"></i>
            </div>
            <strong> Instagram </strong>
            <div class="card__body">
                Puedes seguirnos en nuestro Instagram
            </div>
            <span>Siguenos</span>
        </a>

        <a href="https://wa.me/9982428928" class="card_our">
            <div class="icon">
                <i class="fab fa-whatsapp fa-2x"></i>
            </div>
            <strong> WhatsApp </strong>
            <div class="card__body">
                Puedes comunicarte con nosotros en WhatsApp
            </div>
            <span>Chat</span>
        </a>
    </div>

    </x-app-layaout>
