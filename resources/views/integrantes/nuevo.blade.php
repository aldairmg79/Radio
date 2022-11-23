@extends('layouts.app')
@section('content')
<div class = "container border rounded-4 text-white border-secondary" style="background-color: #1B1B1B;">
<br>
  <h3>Nuevo podcast</h3>
  <hr>
<form action="{{route('integrantes.store')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Fecha ingreso</label>
    <input type="text" name="fecha_ingreso" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Descripcion</label>
    <input type="text" name="descripcion" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Facebook URL</label>
    <input type="text" name="facebook_url" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Twitter URL</label>
    <input type="text" name="twitter_url" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Instagram URL</label>
    <input type="text" name="instagram_url" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Foto</label>
    <input type="text" name="foto" class="form-control" id="exampleInputPassword1">
  </div>
  <input  type="submit" class="btn btn-primary"value='guardar'/> 
</form>
</div>
@endsection