<?php

namespace App\Http\Controllers;

use App\Models\Programas;
use Illuminate\Http\Request;

class ProgramasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programas=Programas::all();
        return view('programas.index', ['programas'=>$programas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programas.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Programas::create($request->all());
        return redirect()->route('programas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programas  $programas
     * @return \Illuminate\Http\Response
     */
    public function show(Programas $programas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programas  $programas
     * @return \Illuminate\Http\Response
     */
    public function edit(Programas $programas)
    {
        return view('programas.actualizar',['programas'=>$programas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programas  $programas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programas $programas)
    {
        $datos=Programas::find($programas->id);
        $datos->id=$request->id;
        $datos->nombre=$request->nombre;
        $datos->jefe=$request->jefe;
        $datos->horario=$request->horario;
        $datos->descripcion=$request->descripcion;
        $datos->logotipo=$request->logotipo;
        $datos->save();
        return redirect()->route('programas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programas  $programas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programas $programas)
    {
        $programas->delete();
        return redirect()->route('programas.index');
    }
}
