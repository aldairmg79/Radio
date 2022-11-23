@extends('usuarios.plantilla')
@section('content')

<div class = "rounded-3 border-secondary" style="background-color: #1B1B1B;">
<table class="table text-white">
  <thead class = "bg-danger text-black">
    <tr>
    <th scope="col">Id usuario</th>
      <th scope="col">Nombre usuario</th>
      <th scope="col">Correo</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Repetir contraseña</th>
      <th scope="col">Privilegios</th>
      <th scope="col" colspan="2">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($usuarios as $usuarios)
    <tr>
      <th scope="row">{{$usuarios->id}}</th>
      <td>{{$usuarios->nombre_usuario}}</td>
      <td>{{$usuarios->correo_electronico}}</td>
      <td>{{$usuarios->contraseña}}</td>
      <td>{{$usuarios->repetir_contraseña}}</td>
      <td>{{$usuarios->privilegios}}</td>
      <td>
        <a class="btn btn-info" href="{{route('usuarios.edit',$usuarios->id)}}"><i class="fa fa-edit"></i></a> 
      </td>
      <td>
            <form action="{{route('usuarios.destroy',$usuarios->id)}}" method="POST">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
            </form>  
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection