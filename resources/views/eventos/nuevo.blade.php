@extends('layouts.app')
@section('content')
<form action="{{route('eventos.store')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Id evento</label>
    <input type="text" name="id_evento" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Titulo</label>
    <input type="text" name="titulo" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Descripcion</label>
    <input type="text" name="descripcion" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Categoria</label>
    <input type="text" name="categoria" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Fecha evento</label>
    <input type="text" name="fecha_evento" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Hora evento</label>
    <input type="text" name="hora_evento" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Enlace Noticia</label>
    <input type="text" name="enlace_noticia" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Foto </label>
    <input type="text" name="foto_evento" class="form-control" id="exampleInputPassword1">
  </div>
  <input  type="submit" class="btn btn-primary"value='guardar'/> 
</form>
@endsectiont