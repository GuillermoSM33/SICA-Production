<x-app-layaout>
    @section('title', 'Agregar Correo')

    <div class="container my-4">
        <h1 class="text-center mb-4">Agregar Correo</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow-lg p-4">
            <div class="card-body">
                <form action="{{ route('emails.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="gmail" class="form-label">Correo Electrónico:</label>
                        <input type="email" name="gmail" id="gmail" class="form-control" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('emails.index') }}" class="btn btn-secondary">Regresar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layaout>
