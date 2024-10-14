<x-app-layaout>

    @section('title', 'Catálogos')

    <style>
        .blue-bar {
            width: 100%;
            background-color: #00a7c1;
            color: white;
            height: 55px;
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .catalogo-item {
            text-align: center;
            margin-bottom: 20px;
        }

        .catalogo-item img {
            width: 100%;
            max-width: 200px;
            cursor: pointer;
        }

        .catalogo-item a {
            display: block;
            color: #000;
            text-decoration: none;
            margin-top: 10px;
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
            }

    </style>

<div class="content">
    <div class="blue-bar">
        <h1 class="section-title">Conoce nuestros catálogos</h1>
    </div>

    <div class="mt-5">
        <h2>Catálogos Subidos</h2>

        <div class="row">
            @foreach($catalogos as $catalogo)
            <div class="col-md-4 catalogo-item">
                <a href="{{ Storage::url($catalogo->pdf) }}" target="_blank">
                    <img src="{{ Storage::url($catalogo->image) }}" alt="{{ $catalogo->cleanName }}">
                </a>
                <a href="{{ Storage::url($catalogo->pdf) }}" target="_blank">{{ $catalogo->cleanName }}</a>
            </div>
            @endforeach
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
