@extends('blogs.plantilla')
@section('content')

<a href="{{route('blogs.create')}}">Nuevo blog
</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id blog</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Categoria</th>
      <th scope="col">Etiquetas</th>
      <th scope="col">Foto</th>
      <th scope="col" colspan="2">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($podcasts as $podcast)
    <tr>
      <th scope="row">{{$podcast->id}}</th>
      <td>{{$podcast->id_programa}}</td>
      <td>{{$podcast->titulo}}</td>
      <td>{{$podcast->url}}</td>
      <td>{{$podcast->descripcion}}</td>
      <td>{{$podcast->fecha_emision}}</td>
      <td>
        <a class="btn btn-info" href="{{route('podcasts.edit',$podcast->id)}}"><i class="fa fa-edit"></i></a> 
      </td>
      <td>
            <form action="{{route('podcasts.destroy',$podcast->id)}}" method="POST">
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