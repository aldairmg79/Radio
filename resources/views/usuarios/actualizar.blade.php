@extends('usuarios.plantilla')
@section('content')
<form action="{{route('usuarios.update',$usuarios->id)}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id usuarios</label>
    <input type="text" value="{{$usuarios->id}}" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nombre</label>
    <input type="text"  value="{{$usuarios->nombre_usuario}}" name="nombre_usuario" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Correo electronico</label>
    <input type="text" value="{{$usuarios->correo_electronico}}" name="correo_electronico" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="text" value="{{$usuarios->contraseña}}" name="contraseña" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Repetir contraseña</label>
    <input type="text"  value="{{$usuarios->repetir_contraseña}}" name="repetir_contraseña" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Privilegios</label>
    <input type="text" value="{{$usuarios->privilegios}}" name="privilegios" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input  type="submit" class="btn btn-primary"value='guardar'/> 
</form>
@endsection