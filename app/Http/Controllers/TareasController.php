<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Models\Tarea;

class TareasController extends Controller
{
    /**index para mostrar todo */
    /**store para guardar todo */
    /** destroy para eliminar todo */
    /** edit para mostrar el formulario de edicion */

    public function store(Request $request){

    $request->validate([
        'titulo' => 'required|min:3'
    ]);

    $tarea = new Tarea;
    $tarea->titulo = $request->titulo;
    $tarea->save();

    return redirect()->route('tareas')-> with('success','Tarea creada');
}

}