@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyecto: {{$proyecto->nombre}}</h2>
  <h3>Titulo: {{$proyecto->titulo}}</h3>
  <h3>Responsable:<a href="/empleado/{{isset($proyecto->empleado)?$proyecto->empleado->id:''}}"> {{isset($proyecto->empleado)? $proyecto->empleado->nombre: ''}}</a></h3>
  <h3>Colaboradores:</h3>
<ul>
  	@foreach($proyecto->empleados as $e)
  		<li><a href="/empleado/{{$e->id}}">{{$e->nombre}}</a></li>
  	@endforeach
  </ul>
@endsection
