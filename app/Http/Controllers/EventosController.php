<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos=Evento::all();
        return view('eventos.index', ['eventos'=>$eventos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Evento::create($request->all());
        return redirect()->route('eventos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $eventos)
    {
        return view('eventos.actualizar',['eventos'=>$eventos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $eventos)
    {
        $datos=Evento::find($eventos->id);
        $datos->id_evento=$request->id_evento;
        $datos->titulo=$request->titulo;
        $datos->descripcion=$request->descripcion;
        $datos->categoria=$request->categoria;
        $datos->fecha_evento=$request->fecha_evento;
        $datos->hora_evento=$request->hora_evento;
        $datos->enlace_noticia=$request->enlace_noticia;
        $datos->foto_evento=$request->foto_evento;
        $datos->save();
        return redirect()->route('eventos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $eventos)
    {
        $eventos->delete();
        return redirect()->route('eventos.index');
    }
}
