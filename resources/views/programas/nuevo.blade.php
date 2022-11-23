@extends('layouts.app')
@section('content')
<div class = "container border rounded-4 text-white border-secondary" style="background-color: #1B1B1B;">
<br>
  <h3>Nuevo programa</h3>
  <hr>
<form action="{{route('programas.store')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jefe</label>
    <input type="text" name="jefe" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Horario</label>
    <input type="text" name="horario" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Descripcion</label>
    <input type="text" name="descripcion" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Logotipo</label>
    <input type="text" name="logotipo" class="form-control" id="exampleInputPassword1">
  </div>
  <input  type="submit" class="btn btn-primary"value='guardar'/> 
</form>
<br>
</div>
@endsection