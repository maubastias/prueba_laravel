<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tarea;

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

    return redirect()->route('index')-> with('success','Tarea creada');
}

public function index (){
    $tareas = Tarea::all();
    return view('paginas.index',['tareas' => $tareas]);
}

public function show ($id){
    $tarea = Tarea::find($id);
    return view('paginas.show',['tarea' => $tarea]);
}

public function update (){
    $tareas = Tarea::all();
    return view('paginas.index',['tareas' => $tareas]);
}

public function destroy (){
    $tareas = Tarea::all();
    return view('paginas.index',['tareas' => $tareas]);
}

}