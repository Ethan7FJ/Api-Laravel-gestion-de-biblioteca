<?php

namespace App\Http\Controllers;

use App\Models\registros;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GestorController extends Controller
{
    public function crear(Request $request)
    {

        $request->validate([
            'usuario' => 'required|string|max:255',
            'identificacion' => 'required|numeric|min:1|max:9999999999',
            'libro_id' => 'required|exists:libros,id',
            'fecha_prestamo' => 'required|date',
            'fecha_devolucion' => 'required|date|after_or_equal:fecha_prestamo',
        ]);

        registros::create($request->all());
        return response()->json('registro generado');
    }
    public function registros()
    {

        $registro = registros::with('libro')->get();

        return response()->json($registro);
    }

    public function eliminar($id)
    {
        $registro = registros::findOrFail($id);
        $registro->delete();

        return response()->json('registro eliminado');
    }
}
