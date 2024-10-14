<x-app-layaout>
    @section('title', 'Correos Activos')

    <div class="container my-4">
        <h1 class="text-center mb-4">Gestión de Correos</h1>
        <div class="text-center">
            <a href="{{ route('emails.create') }}" class="btn btn-primary mb-3">Agregar Correo</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="row d-flex align-items-stretch">
            @foreach ($emails as $email)
                <div class="col-md-6 mb-4 d-flex">
                    <div class="card flex-fill h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">ID: {{ $email->id }}</h5>
                            <p class="card-text"><strong>Correo:</strong> {{ $email->gmail }}</p>
                            <p class="card-text"><strong>Activo:</strong> {{ $email->isactive ? 'Sí' : 'No' }}</p>
                            <div class="mt-auto d-flex justify-content-between">
                                <a href="{{ route('emails.edit', $email->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('emails.destroy', $email->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Desactivar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layaout>
