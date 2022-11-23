
@extends('layouts.app')
@section('content')
<a class="btn btn-danger" href="{{route('integrantes.create')}}">Nuevo integrante</a>
<br>
<br>
<div class = "rounded-3 border-secondary" style="background-color: #1B1B1B;">
<table class="table text-white">
  <thead class = "bg-danger text-black">
    <tr>
      <th scope="col">Id integrantes</th>
      <th scope="col">Fecha ingreso</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">FB</th>
      <th scope="col">TW</th>
      <th scope="col">IN</th>
      <th scope="col">Foto</th>
      <th scope="col" colspan="2">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($integrantes as $integrantes)
    <tr>
      <th scope="row">{{$integrantes->id}}</th>
      <td>{{$integrantes->fecha_ingreso}}</td>
      <td>{{$integrantes->nombre}}</td>
      <td>{{$integrantes->descripcion}}</td>
      <td>{{$integrantes->facebook_url}}</td>
      <td>{{$integrantes->twitter_url}}</td>
      <td>{{$integrantes->instagram_url}}</td>
      <td>{{$integrantes->foto}}</td>

      <td>
        <a class="btn btn-info" href="{{route('integrantes.edit',$integrantes->id)}}"><i class="fa fa-edit"></i></a> 
      </td>
      <td>
            <form action="{{route('integrantes.destroy',$integrantes->id)}}" method="POST">
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