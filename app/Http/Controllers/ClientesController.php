<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class ClientesController extends Controller
{
   
    public function index()
    {
        //
        $clientes = Clientes::orderBy('nombres','asc')
        ->get();
        return [
            'datos'=> $clientes
        ];
    }

   
    public function store(Request $request)
    {
        //guardar
        $clientes = new Clientes();
        $clientes->cedula= $request->cedula;
        $clientes->nombres= $request->nombres;
        $clientes->apellidos= $request->apellidos;
        $clientes->direccion= $request->direccion;
        $clientes->telefono= $request->telefono;
        $clientes->email= $request->email;
    
        $clientes->save();
    }

   
    public function update(Request $request)
    {
        //actualizar
        $clientes = Clientes::findOrFail($request->id_cliente);
        $clientes->cedula= $request->cedula;
        $clientes->nombres= $request->nombres;
        $clientes->apellidos= $request->apellidos;
        $clientes->direccion= $request->direccion;
        $clientes->telefono= $request->telefono;
        $clientes->email= $request->email;
    
        $clientes->save();
    }

    
    public function destroy(Request $request)
    {
        //eliminar
        $clientes = Clientes::findOrFail($request->id_cliente);

        $clientes->delete();
    }
}
