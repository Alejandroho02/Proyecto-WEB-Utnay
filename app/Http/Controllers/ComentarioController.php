<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    public function mostrarFormularioContacto()
    {
        // Aquí puede estar tu lógica para obtener datos adicionales o procesar otras cosas
        
        // Pasar los errores a la vista
        $errors = array(); // Define un array vacío inicialmente
        return view('Contactanos', compact('errors'));
    }
    public function index()
    {
        $comentarios = Comentario::all();
        return view('contactanos', compact('comentarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
            
        ]);

        Comentario::create($request->all());

        return redirect()->back()->with('success', 'Comentario agregado exitosamente.');
    }
}
