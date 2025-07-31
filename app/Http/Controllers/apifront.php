<?php

namespace App\Http\Controllers;

use App\Models\diponibilidad;
use App\Models\genero;
use App\Models\libro;
use Illuminate\Http\Request;

class apifront extends Controller
{
    public function index ()
    {

        $libro = libro::with('genero','disponible')->get();

        return response()->json($libro);
    }

    public function generos()
    {
        return response()->json(genero::all());
    }

    public function disponibilidad()
    {
        return response()->json(diponibilidad::all());
    }

    public function editar(Request $request,$id)
    {
        $libro = libro::findOrFail($id);
        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->genero_id = $request->genero_id;
        $libro->disponible_id = $request->disponible_id;
        $libro->save();

        return response()->json('libro actualizado');
    }

    public function eliminar($id)
    {
        $libro = libro::findOrFail($id);
        $libro->delete();

        return response()->json('Dato eliminado');
    }

    public function crear(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'genero_id' => 'required|exists:generos,id',
            'disponible_id' => 'required|exists:diponibilidads,id',
        ]);

        libro::create($request->all());
        return response()->json('Libro almacenado');
    }
}
