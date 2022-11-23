@extends('layouts.app')
@section('content')
<form action="{{route('integrantes.update',$integrantes->id)}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Fecha ingreso</label>
    <input type="text" value="{{$integrantes->fecha_ingreso}}" name="fecha_ingreso" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nombre</label>
    <input type="text" value="{{$integrantes->nombre}}" name="nombre" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Descripcion</label>
    <input type="text"  value="{{$integrantes->descripcion}}" name="descripcion" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Facebook URL</label>
    <input type="text" value="{{$integrantes->facebook_url}}" name="facebook_url" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Instagram URL</label>
    <input type="text" value="{{$integrantes->instagram_url}}" name="instagram_url" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Foto</label>
    <input type="text" value="{{$integrantes->foto}}" name="foto" class="form-control" id="exampleInputPassword1">
  </div>
  <input  type="submit" class="btn btn-primary"value='guardar'/> 
</form>
@endsection