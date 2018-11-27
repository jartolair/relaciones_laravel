@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>
  <a href="/empleadoForm">Añadir</a>
  <table>
    <tr>
      <th>Id</th>
      <th>Nombre/Apellido</th>
      <th>Departamento</th>
      <th>Responsable del proyecto</th>
      <th>Jefe de departamento</th>
    </tr>
    @foreach($empleados as $e)
	    <tr>
	      <td><a href="/empleado/{{$e->id}}">{{$e->id}}</a></td>
	      <td>{{$e->nombre}} {{$e->apellido1}} {{$e->apellido2}}</td>
	      <td><a href="/departamento/{{$e->departamento->id}}">{{$e->departamento->nombre}}</td>
	      @if(isset($e->proyecto))
	      <td><a href="/proyecto/{{$e->proyecto->id}}">{{$e->proyecto->nombre}}</a></td>
	      @else
			<td></td>
	      @endif
        @if(isset($e->jefeDe))
          <td>{{$e->jefeDe->nombre}}</td>
        @endif
	    </tr>
    @endforeach
  </table>

@endsection

