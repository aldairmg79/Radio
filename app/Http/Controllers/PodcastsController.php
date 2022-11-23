<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //es consultas de base de datos (all)
        $podcasts=Podcast::all();
        return view('podcasts.index', ['podcasts'=>$podcasts]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('podcasts.nuevo');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Podcast::create($request->all());
        return redirect()->route('podcasts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function show(Podcast $podcast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function edit(Podcast $podcast)
    {
        return view('podcasts.actualizar',['podcast'=>$podcast]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Podcast $podcast)
    {
        $datos=Podcast::find($podcast->id);
        $datos->titulo=$request->titulo;
        $datos->url=$request->url;
        $datos->descripcion=$request->descripcion;
        $datos->fecha_emision=$request->fecha_emision;
        $datos->save();
        return redirect()->route('podcasts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function destroy(Podcast $podcast)
    {
        $podcast->delete();
        return redirect()->route('podcasts.index');
    }
}
