@extends('layouts.app')
@section('content')

<a class="btn btn-danger" href="{{route('programas.create')}}">Nuevo programa</a>
<br>
<br>
<div class = "rounded-3 border-secondary" style="background-color: #1B1B1B;">
<table class="table text-white">
  <thead class = "bg-danger text-black">
    <tr>
      <th scope="col">Id programa</th>
      <th scope="col">Nombre</th>
      <th scope="col">Jefe</th>
      <th scope="col">Horario</th> 
      <th scope="col">Descripcion</th>
      <th scope="col">Logotipo</th>
      <th scope="col" colspan="2">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($programas as $programas)
    <tr>
      <th scope="row">{{$programas->id}}</th>
      <td>{{$programas->nombre}}</td>
      <td>{{$programas->jefe}}</td>
      <td>{{$programas->horario}}</td>
      <td>{{$programas->descripcion}}</td>
      <td>{{$programas->logotipo}}</td>

      <td>
           <a class="btn btn-info" href="{{route('programas.edit',$programas->id)}}"><i class="fa fa-edit"></i></a> 
      </td>
      <td>
            <form action="{{route('programas.destroy',$programas->id)}}" method="POST">
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