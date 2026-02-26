@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-8">
            <h1>Editar Canción</h1>
        </div>
        <div class="col-md-4 text-end">
            <a href="{{ route('musica.index') }}" class="btn btn-secondary">← Volver</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('musica.update', $cancion->mus_id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="mus_titulo" class="form-label">Título *</label>
                    <input type="text" class="form-control" id="mus_titulo" name="mus_titulo" 
                           value="{{ $cancion->mus_titulo }}" required>
                </div>

                <div class="mb-3">
                    <label for="mus_artista" class="form-label">Artista *</label>
                    <input type="text" class="form-control" id="mus_artista" name="mus_artista" 
                           value="{{ $cancion->mus_artista }}" required>
                </div>

                <div class="mb-3">
                    <label for="mus_album" class="form-label">Álbum</label>
                    <input type="text" class="form-control" id="mus_album" name="mus_album" 
                           value="{{ $cancion->mus_album }}">
                </div>

                <div class="mb-3">
                    <label for="mus_genero" class="form-label">Género</label>
                    <input type="text" class="form-control" id="mus_genero" name="mus_genero" 
                           value="{{ $cancion->mus_genero }}">
                </div>

                <div class="mb-3">
                    <label for="mus_duracion" class="form-label">Duración</label>
                    <input type="time" class="form-control" id="mus_duracion" name="mus_duracion" 
                           value="{{ substr($cancion->mus_duracion, 0, 5) }}">
                </div>

                <div class="mb-3">
                    <label for="mus_creacion" class="form-label">Fecha de Lanzamiento</label>
                    <input type="date" class="form-control" id="mus_creacion" name="mus_creacion" 
                           value="{{ substr($cancion->mus_creacion, 0, 10) }}">
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Actualizar Canción</button>
                    <a href="{{ route('musica.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
