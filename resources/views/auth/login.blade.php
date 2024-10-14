<x-guest-layout>

    @section('title', 'SICA')

    <style>
    .container {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #F5F5F5;
        padding: 16px; /* Añadido padding para pantallas pequeñas */
    }
    
    .relative {
        position: relative;
        width: 100%; /* Asegura que ocupe todo el ancho en móviles */
        max-width: 400px; /* Limita el tamaño máximo en pantallas más grandes */
        box-sizing: border-box; /* Asegura que el padding y el borde no causen desbordamiento */
    }
    
    .gradient-border {
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        border-radius: 8px;
        background: linear-gradient(to right, #9b5de5, #f15bb5, #ef233c);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        animation: pulse 2s infinite;
        box-sizing: border-box; /* Asegura que el borde no cause desbordamiento */
    }
    
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.7;
        }
    }
    
    .form-container {
        background-color: white;
        padding: 32px; /* Reducido padding para móviles */
        border-radius: 8px;
        box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
        width: 100%; /* Ocupa todo el ancho en pantallas pequeñas */
        max-width: 400px; /* Limita el tamaño máximo en pantallas más grandes */
        position: relative;
        z-index: 10;
        transform: scale(1);
        transition: transform 0.5s ease-in-out;
        box-sizing: border-box; /* Asegura que el padding y el borde no causen desbordamiento */
    }
    
    .form-container:hover {
        transform: scale(1.05);
    }
    
    .form-title {
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 24px; /* Reducido para móviles */
        color: #2D3748;
    }
    
    .input-field {
        width: 100%;
        height: 48px;
        border: 1px solid #2D3748;
        padding: 12px;
        border-radius: 8px;
        box-sizing: border-box; /* Asegura que el padding no cause desbordamiento */
        margin-bottom: 16px; /* Añadido margen inferior */
    }
    
    .input-error {
        margin-top: 8px;
        color: #E53E3E;
        font-size: 14px;
    }
    
    .checkbox-container {
        margin-top: 16px;
    }
    
    .checkbox-label {
        display: inline-flex;
        align-items: center;
    }
    
    .checkbox-input {
        border-radius: 4px;
        border: 1px solid #CBD5E0;
        color: #5A67D8;
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
        outline: none;
    }
    
    .checkbox-text {
        margin-left: 8px;
        font-size: 14px;
        color: #4A5568;
    }
    
    .links-container {
        display: flex;
        justify-content: space-between;
        margin-top: 16px;
        flex-direction: column; /* Apila los enlaces en móviles */
        gap: 8px; /* Espacio entre los enlaces */
    }
    
    .forgot-password,
    .back-home {
        color: #3182CE;
        font-size: 14px;
        text-decoration: none;
        text-align: center; /* Centra los enlaces en móviles */
    }
    
    .forgot-password:hover,
    .back-home:hover {
        color: #2B6CB0;
    }
    
    .button-container {
        display: flex;
        justify-content: center;
        margin-top: 16px;
        width: 100%; /* Asegura que el contenedor del botón ocupe todo el ancho */
    }
    
    .submit-button {
        width: 100%; /* Asegura que el botón ocupe todo el ancho */
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #3182CE;
        color: white;
        font-weight: bold;
        padding: 8px 16px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        outline: none;
        box-sizing: border-box; /* Asegura que el padding no cause desbordamiento */
    }
    
    .submit-button:hover {
        background-color: #2B6CB0;
    }
    
    .submit-button:focus {
        box-shadow: 0px 0px 0px 3px rgba(66, 153, 225, 0.6);
    }

    @media (max-width: 768px) {
        .form-container {
            padding: 24px; /* Ajuste del padding para pantallas pequeñas */
        }

        .form-title {
            font-size: 20px; /* Reducción del tamaño de la fuente del título */
        }

        .input-field {
            height: 40px; /* Reducción de la altura del campo en móviles */
        }

        .checkbox-container {
            margin-top: 12px; /* Menor espacio para móviles */
        }

        .links-container {
            margin-top: 12px; /* Menor espacio para móviles */
        }

        .submit-button {
            height: 40px; /* Reducción de la altura del botón en móviles */
        }
    }
    </style>

    <div class="container">
        <div class="relative">
            <!-- Contenedor del gradiente RGB alrededor del formulario -->
            <div class="gradient-border"></div>
            <!-- Contenedor del formulario -->
            <div id="form-container" class="form-container">
                <h2 id="form-title" class="form-title">Inicio de Sesión</h2>
                <form method="POST" action="{{ route('login') }}" class="form-content">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-text-input id="email" class="input-field" type="email" name="email" :value="old('email')" required autofocus placeholder="Correo" />
                        <x-input-error :messages="$errors->get('email')" class="input-error" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-text-input id="password" class="input-field" type="password" name="password" required placeholder="Contraseña" />
                        <x-input-error :messages="$errors->get('password')" class="input-error" />
                    </div>

                    <!-- Remember Me -->
                    <div class="checkbox-container">
                        <label for="remember_me" class="checkbox-label">
                            <input id="remember_me" type="checkbox" class="checkbox-input" name="remember">
                            <span class="checkbox-text">{{ __('Recordarme') }}</span>
                        </label>
                    </div>

                    <div class="links-container">
                        @if (Route::has('password.request'))
                            <a class="forgot-password" href="{{ route('password.request') }}">
                                {{ __('Olvidé Mi Contraseña') }}
                            </a>
                        @endif

                        <a href="/" class="back-home">{{ __('Ir al Inicio') }}</a>
                    </div>

                    <div class="button-container">
                        <x-primary-button class="submit-button">
                            {{ __('Iniciar Sesión') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-guest-layout>
