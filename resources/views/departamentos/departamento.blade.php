@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamento: {{$departamento->nombre}}</h2>
  <h3>Codigo: {{$departamento->codigo}}</h3>
  <h3>Empleados: </h3>
  <ul>
  	@foreach($departamento->empleados as $e)
  		<li><a href="/empleado/{{$e->id}}">{{$e->nombre}}</a></li>
  	@endforeach
  </ul>
@endsection
