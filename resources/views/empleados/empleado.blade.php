@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleado: {{$empleado->nombre}}</h2>
  <h3>Responsable del proyecto: <a href="/proyecto/{{$empleado->proyecto->id}}">{{$empleado->proyecto->nombre}}</a></h3>
  <h3>Colabora en los siguientes proyectos:</h3>
  <ul>
  	@foreach($empleado->proyectos as $p)
  		<li><a href="/proyecto/{{$p->id}}">{{$p->nombre}}</a> ( {{DateTime::createFromFormat('Y-m-d',($p->pivot->fechaInicio))->format('d/m/Y')}} ) - ( {{DateTime::createFromFormat('Y-m-d',($p->pivot->fechaFin))->format('d/m/Y')}} )</li>
  	@endforeach
  </ul>
@endsection
