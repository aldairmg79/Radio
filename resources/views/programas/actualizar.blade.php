@extends('layouts.app')
@section('content')
<div class = "container border rounded-4 text-white border-secondary" style="background-color: #1B1B1B;"> 
  <br>
  <h3>Editar</h3>
  <hr>
<form action="{{route('programas.update',$programas->id)}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id programa</label>
    <input type="text" value="{{$programas->id}}" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nombre</label>
    <input type="text"  value="{{$programas->nombre}}" name="nombre" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jefe</label>
    <input type="text" value="{{$programas->jefe}}" name="jefe" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Horario</label>
    <input type="text" value="{{$programas->horario}}" name="horario" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Descripcion</label>
    <input type="text"  value="{{$programas->despcripcion}}" name="descripcion" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Logotipo</label>
    <input type="text" value="{{$programas->logotipo}}" name="logotipo" class="form-control" id="exampleInputPassword1">
  </div>

  <input  type="submit" class="btn btn-primary"value='guardar'/> 
</form>
</div>
@endsection