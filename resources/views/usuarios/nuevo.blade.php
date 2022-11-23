@extends('usuarios.plantilla')
@section('content')
<form action="{{route('usuarios.store')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nombre usuario</label>
    <input type="text" name="nombre_usuario" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Correo electronico</label>
    <input type="text" name="correo_electronico" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="text" name="contraseña" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Repetir contraseña</label>
    <input type="text" name="repetir_contraseña" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Privilegios</label>
    <input type="text" name="privilegios" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input  type="submit" class="btn btn-primary"value='guardar'/> 
</form>
@endsection