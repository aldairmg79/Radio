<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=Usuarios::all();
        return view('usuarios.index', ['usuarios'=>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Usuarios::create($request->all());
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuarios $usuarios)
    {
        return view('usuarios.actualizar',['usuarios'=>$usuarios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuarios $usuarios)
    {
        $datos=Usuarios::find($usuarios->id);
        $datos->id_usuarios=$request->id_usuarios;
        $datos->nombre_usuario=$request->nombre_usuario;
        $datos->correo_electronico=$request->correo_electronico;
        $datos->contraseña=$request->contraseña;
        $datos->repetir_contraseña=$request->repetir_contraseña;
        $datos->privilegios=$request->privilegios;
        $datos->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuarios $usuarios)
    {
        $usuarios->delete();
        return redirect()->route('usuarios.index');
    }
}
