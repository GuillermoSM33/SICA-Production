<x-app-layaout>

@section('title', 'Subir Catálogos')

<style>
    .blue-bar {
        width: 100%;
        background-color: #00a7c1;
        color: white;
        height: 55px;
        align-items: center;
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .content {
        margin: 2rem auto;
        max-width: 80%;
        padding: 1rem;
        background: #f7f7f8;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-label {
        font-weight: bold;
        color: #464853;
        margin-top: 15px;
        margin-bottom: 8px;
    }

    .btn-primary, .btn-danger, .btn-warning {
        width: 100%;
        display: inline-block;
        text-align: center;
        padding: 0.5rem 0; 
        margin-bottom: 0.5rem; 
        font-size: 1rem; 
        color: white;
    }

    .btn-primary {
        background-color: #00a7c1;
        border-color: #00a7c1;
    }
    
    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }
    
    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
    }
    
    .btn-primary:hover, .btn-danger:hover, .btn-warning:hover {
        opacity: 0.8; 
    }

    .btn-sm {
        padding: 0.5rem 1rem; 
        font-size: 0.875rem;
    }

    .alert-success {
        margin-top: 1rem;
        text-align: center;
    }

    .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table {
        margin-top: 2rem;
        width: 100%;
        table-layout: fixed;
    }

    .table th, .table td {
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
    }

    .table img {
        max-width: 50px;
        height: auto;
    }

    .pagination {
        justify-content: center;
    }

    .actions .btn {
        flex: 1;
        min-width: 100px;
    }

    @media (max-width: 768px) {
        .blue-bar {
            font-size: 16px;
            height: 45px;
        }

        .content {
            margin: 1rem;
            padding: 1rem;
            box-shadow: none;
            max-width: 100%;
        }

        .table {
            font-size: 14px;
        }

        .table th, .table td {
            padding: 0.5rem;
            white-space: normal;
            word-wrap: break-word;
        }

        .form-label {
            font-size: 14px;
        }

        .actions {
            flex-direction: column; 
        }

        .actions .btn {
            min-width: 78px;
            font-size: 10px;
        }
        
        .btn-primary, .btn-danger, .btn-warning {
            width: 100%;
            margin-bottom: 0.5rem;
            font-size: 14px;
        }

        .btn-close {
            margin-top: -8px;
        }

        .modal-content {
            padding: 1rem;
        }

        .table img {
            max-width: 30px;
        }
    }

    .table td a {
        display: block;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
    }
</style>



<div class="content">

    <div class="blue-bar">
        <h1 class="section-title">Subir Catálogo</h1>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('upload.pdf') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="image" class="form-label">SUBIR IMAGEN</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>

        <div class="mb-3">
            <label for="pdf" class="form-label">SUBIR PDF</label>
            <input type="file" class="form-control" id="pdf" name="pdf" required>
        </div>

        <button type="submit" class="btn btn-primary">Subir</button>
    </form>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre PDF</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($catalogos as $catalogo)
                <tr>
                    <td><a href="{{ Storage::url($catalogo->pdf) }}" target="_blank">{{ basename($catalogo->pdf) }}</a></td>
                    <td><img src="{{ Storage::url($catalogo->image) }}" alt="Imagen" style="max-width: 50px;"></td>
                    <td>
                        <div class="actions">
                            <form action="{{ route('delete.pdf', $catalogo->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $catalogo->id }}">
                                Editar
                            </button>
                        </div>

    
                        <!-- Modal -->
                        <div class="modal fade" id="editModal{{ $catalogo->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editar Catálogo</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('update.pdf', $catalogo->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
    
                                            <div class="mb-3">
                                                <label for="pdf" class="form-label">Actualizar PDF</label>
                                                <input type="file" class="form-control" id="pdf" name="pdf">
                                            </div>
    
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Actualizar Imagen</label>
                                                <input type="file" class="form-control" id="image" name="image">
                                            </div>
    
                                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $catalogos->links() }}

</div>

</x-app-layaout>