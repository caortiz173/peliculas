<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestamopeliculas;

class PrestamopeliculasController extends Controller
{
    public function index()
    {
        //
        $prestamopeliculas = Prestamopeliculas::get();
        return [
            'datos'=> $prestamopeliculas
        ];
    }

   
    public function store(Request $request)
    {
        //guardar
        $prestamopeliculas = new Prestamopeliculas();
        $prestamopeliculas->fecha= $request->fecha;
        $prestamopeliculas->id_client= $request->id_client;
        $prestamopeliculas->id_peli= $request->id_peli;

        $prestamopeliculas->save();
    }

    
    public function update(Request $request)
    {
        //actualizar
        $prestamopeliculas = Prestamopeliculas::findOrFail($request->id_prestamo);
        $prestamopeliculas->fecha= $request->fecha;
        $prestamopeliculas->id_client= $request->id_client;
        $prestamopeliculas->id_peli= $request->id_peli;

        $prestamopeliculas->save();
    }

   
    public function destroy(Request $request)
    {
        //eliminar
        $prestamopeliculas = Prestamopeliculas::findOrFail($request->id_prestamo);

        $prestamopeliculas->delete();
    }
}
