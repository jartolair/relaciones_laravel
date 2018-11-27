@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Clente: {{$cliente->nombre}}</h2>
  <h3>Proyectos:</h3>
<ul>
  	@foreach($cliente->proyectos as $p)
  		<li><a href="/proyecto/{{$p->id}}">{{$p->nombre}}</a> </li>

  	@endforeach
  </ul>
@endsection
