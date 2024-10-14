<x-app-layaout>

    @section('title', 'Panel Administrativo')

    <style>
        .bienvenida {
            margin-top: 2%;
            margin-left: 2%;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .explicacion {
            height: fit-content;
            background-color: rgb(235, 232, 232);
            width: 80%;
            align-items: center;
            text-align: justify;
            margin: 2% 10%;
            border-radius: 8px;
            border: 3px solid lightskyblue;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .explicacion h2 {
            padding: 2% 3%;
        }

        .explicacion p {
            padding: 0 3%;
            font-size: 18px;
        }

        .lista {
            font-size: 18px;
            margin-left: 2%;
        }

        .explicacion a {
            text-decoration: none;
        }

        .introduccion {
            margin-left: 2%;
        }

        .cartas{
            width: 80%;
            margin: 2% auto;
            text-align: center;
            align-items: center;
            align-self: center;
        }

        /* EXTERNOS */

        .cards_kame {
            display: flex;
            gap: 15px;
            justify-content: center;
            align-items: center;
        }

        .cards_kame a {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            height: 100px;
            width: 250px;
            border-radius: 10px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            transition: 400ms;
        }

        .cards_kame a.red_kame {
            background-color: #f43f5e;
        }

        .cards_kame a.blue_kame {
            background-color: #3b82f6;
        }

        .cards_kame a.green_kame {
            background-color: #22c55e;
        }

        .cards_kame a p.tip_kame {
            font-size: 1em;
            font-weight: 700;
        }

        .cards_kame a p.second-text_kame {
            font-size: .7em;
        }

        .cards_kame a:hover {
            transform: scale(1.1, 1.1);
        }

        .cards_kame:hover>a:not(:hover) {
            filter: blur(10px);
            transform: scale(0.9, 0.9);
        }

        @media (max-width: 768px) {
            .explicacion p {
                margin: 0 3%;
            }

            .lista {
                margin: 0 3%;
                margin-right: 6%;
            }

            .cards_kame{
                flex-direction: column;
                align-items: stretch;
            }

            .cards_kame a {
                width: 100%;
                margin-bottom: 10px;
            }

            .cards_kame a:hover {
                transform: none;
            }

        }

    </style>

    <div class="bienvenida">
        <h1>{{ "Bienvenido al panel Administrativo " . Auth::user()->name }}</h1>
    </div>

    <div class="explicacion">
        <h2>¿Para qué sirve el panel Administrativo?</h2>
        <p>Es mediante este panel que podemos editar de forma directa la manera en que los usuarios visualizan la aplicación web.</p>
        <h2>¿Qué es lo que podemos hacer?</h2>
        <p>Por el Momento podemos hacer las siguientes cosas: </p>
        <ul class="lista">
            <li>Controlar de manera completa los catálogos (Temporalmente habilitado solo para ti.)</li>
            <li>Controlar de manera completa los correos a los que llegarán las notificaciones de la caja de notificaciones en la página de
                <a href="/contacto">contacto</a>
            </li>
        </ul>
    </div>

    <div class="introduccion">
        <h1>¿Qué es lo que quieres hacer el día de hoy?</h1>
    </div>

    <div class="cartas">
        <div class="cards_kame">
            <a href="/subir-catalogos" class="card_kame red_kame">
                <p class="tip_kame">Subir Catálogos</p>
                <p class="second-text_kame">! Vámos !</p>
            </a>
            <a href="/emails" class="card_kame blue_kame">
                <p class="tip_kame">Administrar Correos</p>
                <p class="second-text_kame">! Vámos !</p>
            </a>
            <a href="/inicio" class="card_kame green_kame">
                <p class="tip_kame">Regresar al inicio</p>
                <p class="second-text_kame">! Vámos !</p>
            </a>
        </div>

    </div>

</x-app-layaout>
