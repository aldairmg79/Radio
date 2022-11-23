<?php

namespace App\Http\Controllers;

use App\Models\Integrantes;
use Illuminate\Http\Request;

class IntegrantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $integrantes=Integrantes::all();
        return view('integrantes.index', ['integrantes'=>$integrantes]);

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('integrantes.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Integrantes::create($request->all());
        return redirect()->route('integrantes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Integrantes  $integrantes
     * @return \Illuminate\Http\Response
     */
    public function show(Integrantes $integrantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Integrantes  $integrantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Integrantes $integrante)
    {
        return view('integrantes.actualizar',['integrantes'=>$integrante]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Integrantes  $integrantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Integrantes $integrantes)
    {
        $datos=Integrantes::find($integrantes->id);
        $datos->fecha_ingreso=$request->fecha_ingreso;
        $datos->nombre=$request->nombre;
        $datos->descripcion=$request->descripcion;
        $datos->facebook_url=$request->facebook_url;
        $datos->twitter_url=$request->twitter_url;
        $datos->instagram_url=$request->instagram_url;
        $datos->save();
        return redirect()->route('integrantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Integrantes  $integrantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Integrantes $integrantes)
    {
        $integrantes->delete();
        return redirect()->route('integrantes.index');
    }
}
