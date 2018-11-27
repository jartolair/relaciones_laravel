@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Titulo</th>
      <th>Responsable</th>
      <th>Cliente</th>
    </tr>
    @foreach($proyectos as $p)
	    <tr>
	      <td><a href="/proyecto/{{$p->id}}">{{$p->id}}</a></td>
	      <td>{{$p->nombre}}</td>
	      <td>{{$p->titulo}}</td>
	      <td><a href="/empleado/{{$p->empleado->id}}">{{$p->empleado->nombre}}</a></td>
        <td><a href="/cliente/{{$p->cliente->id}}">{{$p->cliente->nombre}}</a></td>
	    </tr>
    @endforeach
  </table>

@endsection
