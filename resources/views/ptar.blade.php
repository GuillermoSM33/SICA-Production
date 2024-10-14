<x-app-layaout>

    @section('title', 'PTAR')

    <style>
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

    <div class="video-container" style="width: 100%; margin-bottom: 20px; padding: 0; height: 30vh;">
        <video id="loopVideo" autoplay muted playsinline style="width: 100%; height: 100%; object-fit: cover;">
            <source src="{{ asset('storage/videos/ocean.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <h2 class="section-title">SERVICIOS DE PLANTAS DE AGUAS RESIDUALES (PTAR)</h2>

    <br>

    <x-card_for_service :servicios="$servicios"> </x-card_for_service>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var video = document.getElementById('loopVideo');
            var startTime = 5;
            var endTime = 40;

            video.addEventListener('timeupdate', function() {
                if (video.currentTime >= endTime) {
                    video.currentTime = startTime;
                    video.play();
                }
            });

            video.addEventListener('loadedmetadata', function() {
                video.currentTime = startTime;
                video.play();
            });

            video.addEventListener('play', function() {
                if (video.currentTime < startTime || video.currentTime >= endTime) {
                    video.currentTime = startTime;
                }
            });
        });

    </script>

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
