@extends('layouts.app')
@section('content')
<a href="{{route('eventos.create')}}">Nuevo Evento
</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Categoria</th> 
      <th scope="col">Fecha evento</th>
      <th scope="col">Hora evento</th>
      <th scope="col">Enlace notifia</th>
      <th scope="col">Foto</th>
      <th scope="col" colspan="2">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($eventos as $eventos)
    <tr>
      <th scope="row">{{$eventos->id}}</th>
      <td>{{$eventos->titulo}}</td>
      <td>{{$eventos->descripcion}}</td>
      <td>{{$eventos->categoria}}</td>
      <td>{{$eventos->fecha_evento}}</td>
      <td>{{$eventos->hora_evento}}</td>
      <td>{{$eventos->enlace_noticia}}</td>
      <td>{{$eventos->foto_evento}}</td>
    

      <td>
        <a class="btn btn-info" href="{{route('eventos.edit',$eventos->id)}}"><i class="fa fa-edit"></i></a> 
      </td>
      <td>
            <form action="{{route('eventos.destroy',$eventos->id)}}" method="POST">
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