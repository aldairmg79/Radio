@extends('layouts.app')
@section('content')
<a class="btn btn-danger" href="{{route('podcasts.create')}}">Nuevo podcast</a>
<br>
<br>

<div class = "rounded-3 border-secondary" style="background-color: #1B1B1B;">
<table class="table text-white">
  <thead class = "bg-danger text-black">
    <tr>
      <th scope="col">Id podcast</th>
      <th scope="col">Id programa</th>
      <th scope="col">Titulo</th>
      <th scope="col">URL</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Fecha emision</th>
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