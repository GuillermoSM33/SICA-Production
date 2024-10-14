<x-guest-layout>
    <div class="container my-4">
        <div class="relative">
            <!-- Contenedor del gradiente RGB alrededor del formulario -->
            <div class="gradient-border"></div>
            <!-- Contenedor del formulario -->
            <div id="form-container" class="form-container">
                <h2 id="form-title" class="form-title">{{ __('Restablecer Contraseña') }}</h2>
                
                <form method="POST" action="{{ route('password.store') }}">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Correo Electrónico')" />
                        <x-text-input id="email" class="input-field mt-1" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="input-error mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Nueva Contraseña')" />
                        <x-text-input id="password" class="input-field mt-1" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="input-error mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
                        <x-text-input id="password_confirmation" class="input-field mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="input-error mt-2" />
                    </div>

                    <div class="button-container mt-4">
                        <x-primary-button class="submit-button">
                            {{ __('Restablecer Contraseña') }}
                        </x-primary-button>
                    </div>
                </form>

                <!-- Botón para regresar al login -->
                <div class="button-container mt-3">
                    <a href="{{ route('login') }}" class="submit-button text-center text-white">{{ __('Regresar al Inicio de Sesión') }}</a>
                </div>
            </div>
        </div>
    </div>

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
        text-decoration: none; /* Elimina la subrayado de los enlaces */
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

        .submit-button {
            height: 40px; /* Reducción de la altura del botón en móviles */
        }
    }
    </style>
</x-guest-layout>
