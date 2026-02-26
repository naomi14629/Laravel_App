@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-8">
            <h1>Catálogo de Música</h1>
        </div>
        <div class="col-md-4 text-end">
            <a href="{{ route('musica.create') }}" class="btn btn-success">+ Agregar Canción</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if($canciones->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Título</th>
                        <th>Artista</th>
                        <th>Álbum</th>
                        <th>Género</th>
                        <th>Duración</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($canciones as $cancion)
                    <tr>
                        <td><strong>{{ $cancion->mus_titulo }}</strong></td>
                        <td>{{ $cancion->mus_artista }}</td>
                        <td>{{ $cancion->mus_album }}</td>
                        <td>{{ $cancion->mus_genero }}</td>
                        <td>{{ $cancion->mus_duracion }}</td>
                        <td class="text-center">
                            <a href="{{ route('musica.edit', $cancion->mus_id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('musica.destroy', $cancion->mus_id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info text-center py-5">
            <p>No hay canciones registradas. <a href="{{ route('musica.create') }}">Agregar una</a></p>
        </div>
    @endif
</div>
@endsection