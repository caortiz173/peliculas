<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peliculas;

class PeliculasController extends Controller
{
    
    public function index()
    {
        //
        $peliculas = Peliculas::orderBy('nombre','asc')
        ->get();
        return [
            'datos'=> $peliculas
        ];
    }

   
    public function store(Request $request)
    {
        //guardar
        $peliculas = new Peliculas();
        $peliculas->nombre= $request->nombre;
        $peliculas->puntuacion= $request->puntuacion;
        $peliculas->precio= $request->precio;
        $peliculas->id_categ= $request->id_categ;

        $peliculas->save();
    }

   
    public function update(Request $request)
    {
        //actualizar
        $peliculas = Peliculas::findOrFail($request->id_pelicula);
        $peliculas->nombre= $request->nombre;
        $peliculas->puntuacion= $request->puntuacion;
        $peliculas->precio= $request->precio;
        $peliculas->id_categ= $request->id_categ;

        $peliculas->save();
    }

  
    public function destroy(Request $request)
    {
        //eliminar
        $peliculas = Peliculas::findOrFail($request->id_pelicula);

        $peliculas->delete();
    }
}
