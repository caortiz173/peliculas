<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;

class CategoriasController extends Controller
{
   
    public function index()
    {
        //
        $categorias = Categorias::orderBy('nombre','asc')
        ->get();
        return [
            'datos'=> $categorias
        ];
    }

   
    public function store(Request $request)
    {
        //guardar
        $categorias = new Categorias();
        $categorias->nombre= $request->nombre;

        $categorias->save();
    }

    
    public function update(Request $request)
    {
        //actualizar
        $categorias = Categorias::findOrFail($request->id_categoria);
        $categorias->nombre= $request->nombre;

        $categorias->save();
    }

  
    public function destroy(Request $request)
    {
        //eliminar
        $categorias = Categorias::findOrFail($request->id_categoria);

        $categorias->delete();
    }
}
