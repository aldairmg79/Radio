@extends('layouts.app')

@section('content')
<div class = "container border rounded-4 text-white border-secondary" style="background-color: #1B1B1B;"> 
  <br>
  <h3>Editar</h3>
  <hr>
<form action="{{route('podcasts.update',$podcast->id)}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id podcast</label>
    <input type="text" value="{{$podcast->id}}" name="id_podcast" class="form-control text-white border-secondary"  style="background-color: #202020" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Id programa</label>
    <input type="text"  value="{{$podcast->id_programa}}" name="id_programa" class="form-control text-white border-secondary"  style="background-color: #202020" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Titulo</label>
    <input type="text" value="{{$podcast->titulo}}" name="titulo" class="form-control text-white border-secondary"  style="background-color: #202020" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">URL</label>
    <input type="text" value="{{$podcast->url}}" name="url" class="form-control text-white border-secondary"  style="background-color: #202020" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Descripcion</label>
    <input type="text"  value="{{$podcast->despcripcion}}" name="descripcion" class="form-control text-white border-secondary"  style="background-color: #202020" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Fecha emision</label>
    <input type="text" value="{{$podcast->fecha_emision}}" name="fecha_emision" class="form-control text-white border-secondary"  style="background-color: #202020" id="exampleInputPassword1">
  </div>
  <input  type="submit" class="btn btn-primary"value='guardar'/> 
  
</form>
<br>
</div>
@endsection