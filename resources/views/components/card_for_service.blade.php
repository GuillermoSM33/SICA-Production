<div class="container">
    <div class="row">
        @foreach($servicios as $servicio)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-12 img-container" data-service="{{ $servicio->nombre_servicio }}">
                            <img src="{{ env('APP_URL') . '/SICA/img/' . $servicio->imagen_servicio }}" class="img-fluid" alt="{{ $servicio->nombre_servicio }}">
                        </div>

                        <div class="col-md-12 d-flex flex-column">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $servicio->nombre_servicio }}</h5>
                                <p class="card-text flex-grow-1">
                                    <span class="short-text">{{ Str::limit($servicio->descripcion_servicio, 100) }}</span>
                                    <span class="full-text">{{ $servicio->descripcion_servicio }}</span>
                                </p>
                                @if(strlen($servicio->descripcion_servicio) > 100)
                                    <a href="#" class="read-more">Seguir leyendo</a>
                                @endif
                                <div class="btn-group mt-2">
                                    @unless(Route::is('servicios'))
                                        <a href="/servicios" class="btn btn-primary">Más Servicios</a>
                                    @endunless
                                    <a href="https://wa.me/9982428928" class="btn btn-primary">Consultar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


<style>
    .img-container {
        width: 100%;
        height: 150px;
        position: relative;
        overflow: hidden;
    }

    .img-container img {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transform: translate(-50%, -50%);
        object-position: center; 
    }

    .img-container[data-service="Asesoría Técnica a Plantas de Ósmosis Inversa."] img {
        object-position: top;
        object-fit: inherit;
    }

    .img-container[data-service="Asesoría Técnica a Torre desgasificadora."] img {
        object-position: top;
        object-fit: inherit;
    }

    .img-container[data-service="Servicios de Instalación."] img {
        object-position: top;
        object-fit: inherit;
    }

    .img-container[data-service="Instalación y reparación a Tableros de Control Eléctrico."] img {
        object-position: top;
        object-fit: inherit;
    }

    .img-container[data-service="Limpieza de piscinas."] img {
        object-position: top;
        object-fit: inherit;
    }
    
    .img-container[data-service="Instalación de Equipos de Purificación."] img {
        object-position: top;
        object-fit: inherit;
    }
    
    .img-container[data-service="Mantenimiento Preventivo."] img {
        object-position: top;
        object-fit: inherit;
    }

    .img-container[data-service="Servicio de Mantenimiento Fan&Coll."] img {
        object-position: top;
        object-fit: inherit;
    }

    .img-container[data-service="Servicio de Mantenimiento Fan&Coll."] img {
        object-position: top;
        object-fit: inherit;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .card-text {
        flex-grow: 1;
    }

    .card-text .full-text {
        display: none;
    }

    .card-text.expanded .short-text {
        display: none;
    }

    .card-text.expanded .full-text {
        display: inline;
    }

    .read-more {
        color: #007bff;
        cursor: pointer;
        text-decoration: underline;
    }

    .read-more:hover {
        text-decoration: none;
    }

    .btn-group {
        display: flex;
        justify-content: center;
        gap: 10px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.read-more').forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const cardText = button.closest('.card-body').querySelector('.card-text');
                cardText.classList.toggle('expanded');
                button.textContent = cardText.classList.contains('expanded') ? 'Leer menos' : 'Seguir leyendo';
            });
        });
    });
</script>
