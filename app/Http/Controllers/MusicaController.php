<?php

namespace App\Http\Controllers;

use App\Models\Musica;
use Illuminate\Http\Request;

class MusicaController extends Controller
{
    // Mostrar todas las canciones
    public function index()
    {
        $canciones = Musica::where('mus_estado', 'A')->get();
        return view('musica.index', ['canciones' => $canciones]);
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('musica.create');
    }

    // Guardar nueva canción
    public function store(Request $request)
    {
        $request->validate([
            'mus_titulo' => 'required|string|max:150',
            'mus_artista' => 'required|string|max:100',
            'mus_album' => 'nullable|string|max:100',
            'mus_genero' => 'nullable|string|max:50',
            'mus_duracion' => 'nullable|date_format:i:s',
            'mus_creacion' => 'nullable|date_format:Y-m-d'
        ]);

        $data = $request->all();
        $data['mus_estado'] = 'A';

        Musica::create($data);

        return redirect()->route('musica.index')
                         ->with('success', 'Canción creada correctamente.');
    }

    // Mostrar formulario de edición
    public function edit($id)
    {
        $cancion = Musica::findOrFail($id);
        return view('musica.edit', compact('cancion'));
    }

    // Actualizar canción
    public function update(Request $request, $id)
    {
        $request->validate([
            'mus_titulo' => 'required|string|max:150',
            'mus_artista' => 'required|string|max:100',
            'mus_album' => 'nullable|string|max:100',
            'mus_genero' => 'nullable|string|max:50',
            'mus_duracion' => 'nullable|date_format:i:s',
            'mus_creacion' => 'nullable|date_format:Y-m-d'
        ]);

        $cancion = Musica::findOrFail($id);
        $cancion->update($request->all());

        return redirect()->route('musica.index')
                         ->with('success', 'Canción actualizada correctamente.');
    }

    // Eliminar canción
    public function destroy($id)
    {
        $cancion = Musica::findOrFail($id);
        $cancion->update(['mus_estado' => 'I']);

        return redirect()->route('musica.index')
                         ->with('success', 'Canción eliminada correctamente.');
    }
}
