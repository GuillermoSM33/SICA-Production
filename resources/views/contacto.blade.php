<x-app-layaout>

    @section('title', 'Contáctanos')

    <style>
        .bg-collage {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image:
                url('{{ env('APP_URL') . '/SICA/img/SERVICIOS_PURIFICADORES_AGUA/instalacion_equipos_purificacion.jpg'}}'),
                url('{{ env('APP_URL') . '/SICA/img/SERVICIOS_MANTENIMIENTO_LIMPIEZA/mantenimiento_planta_emergencia.jpg'}}'),
                url('{{ env('APP_URL') . '/SICA/img/MANTENIMIENTO_PISCINAS_BALANCE_AGUA/inspeccion_mantenimientos_equipo_piscina.jpg'}}'),
                url('{{ env('APP_URL') . '/SICA/img/SERVICIOS_PLANTAS_AGUAS_RESIDUALES/asesoria_tecnica_consultoria_ptar.jpg'}}');
            background-size: 50% 50%;
            background-repeat: no-repeat;
            background-position: top left, top right, bottom left, bottom right;
            padding: 40px 20px; /* Añadimos padding para reducir el espacio */
        }

        .bg-collage::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .contact-info-text {
            position: relative;
            z-index: 2;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            margin: 20px 0;
            max-width: 800px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            text-align: center;
            font-size: 1.2rem;
            color: #333;
        }

        .contact-form {
            position: relative;
            z-index: 2;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            width: 800px;
            margin: 20px auto;
        }

        .contact-info {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            text-align: center;
            color: #333;
            position: relative;
            z-index: 2;
            gap: 35px;
        }

        .contact-info div {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
            width: 230px;
        }

        .contact-info div:hover {
            background-color: #51abcb;
            color: #fff;
        }

        .contact-info i {
            font-size: 1.5rem;
            color: #007bff;
        }

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

            .contact-info {
                flex-direction: column;
                align-items: center;
                gap: 15px;
                margin-bottom: 30px;
            }

            .contact-form {
                margin: 20px 20px;
                width: -webkit-fill-available;
                margin-left: 2%;
                margin-right: 2%;
            }

            .contact-info div {
                width: 100%;
                max-width: 230px;
            }

            .bg-collage {
                padding-bottom: 30px;
                box-sizing: border-box;
            }
        }

        .content {
            flex: 1 0 auto;
        }

    </style>

    <div class="bg-collage content">
        <div class="contact-info-text">
            Para obtener más información sobre los servicios y productos, o si tienes alguna otra pregunta, completa el formulario de contacto.
        </div>

        <div class="contact-form">
            <h2>Contáctanos</h2>
            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Tu nombre" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Tu email" required>
                </div>
                <div class="form-group">
                    <label for="message">Mensaje</label>
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tu mensaje" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </form>
        </div>

        <div class="contact-info">
            <div>
                <i class="fas fa-phone"></i>
                <span>(998) – 739 – 4038</span>
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                <span>admi_sica@hotmail.com</span>
            </div>
            <div>
                <i class="fab fa-whatsapp"></i>
                <span>9982428928</span>
            </div>
        </div>
    </div>

    <div id="floating-tooltip" class="floating-tooltip">
        <ul class="nav col-md-4">
            <li class="social-icon" style="margin-left: 5px; margin-right: 5px"><a class="text-body-secondary" href="#"><i class="fab fa-instagram fa-2x"></i></a></li>
            <li class="social-icon" style="margin-left: 5px; margin-right: 5px"><a class="text-body-secondary" href="https://wa.me/9982428928"><i class="fab fa-whatsapp fa-2x"></i></a></li>
            <li class="social-icon" style="margin-left: 5px; margin-right: 5px"><a class="text-body-secondary" href="https://www.facebook.com/profile.php?id=61561158332942"><i class="fab fa-facebook fa-2x"></i></a></li>
        </ul>
    </div>

</x-app-layaout>
