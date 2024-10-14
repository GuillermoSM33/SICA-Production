<x-app-layaout>
    @section('title', 'Editar Correo')

    <div class="container my-4">
        <h1 class="text-center mb-4">Editar Correo</h1>

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
                <form action="{{ route('emails.update', $email->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="gmail" class="form-label">Correo Electrónico:</label>
                        <input type="email" name="gmail" id="gmail" class="form-control" value="{{ $email->gmail }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="isactive" class="form-label">Activo:</label>
                        <select name="isactive" id="isactive" class="form-select">
                            <option value="1" {{ $email->isactive ? 'selected' : '' }}>Sí</option>
                            <option value="0" {{ !$email->isactive ? 'selected' : '' }}>No</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('emails.index') }}" class="btn btn-secondary">Regresar</a>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layaout>
