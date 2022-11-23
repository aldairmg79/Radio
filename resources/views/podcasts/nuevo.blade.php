@extends('layouts.app')
@section('content')


<div class = "container border rounded-4 text-white border-secondary" style="background-color: #1B1B1B;">
<br>
  <h3>Nuevo podcast</h3>
  <hr>
<form action="{{route('podcasts.store')}}" method="POST">
    @csrf
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Id programa</label>
    <input type="text" name="id_programa" class="form-control border-secondary text-white" style="background-color: #202020" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Titulo</label>
    <input type="text" name="titulo" class="form-control border-secondary text-white" style="background-color: #202020" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">URL</label>
    <input type="text" name="url" class="form-control border-secondary text-white" style="background-color: #202020" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Descripcion</label>
    <input type="text" name="descripcion" class="form-control border-secondary text-white" style="background-color: #202020" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Fecha emision</label>
    <input type="text" name="fecha_emision" class="form-control border-secondary text-white" style="background-color: #202020" id="exampleInputPassword1">
  </div>
  <input  type="submit" class="btn btn-primary"value='guardar'/> 
  <br>
</form>
<br>
</div>
@endsection