@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Cliente</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
    @foreach($clientes as $c)
	    <tr>
	      <td><a href="/cliente/{{$c->id}}">{{$c->id}}</a></td>
	      <td>{{$c->nombre}}</td>
	    </tr>
    @endforeach
  </table>

@endsection
