@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Insetar nuevo empleado</h2>
  <form action="/empleadoInsert" method="get">
  	Nombre:
  	<input type="text" name="nombre" required>
  	<br>
  	Primer apellido:
  	<input type="text" name="apellido1" required>
  	<br>
  	Segundo apellido:
  	<input type="text" name="apellido2" required>
  	<br>
  	Email:
  	<input type="text" name="email" required>
  	<br>
  	Telefono:
  	<input type="number" name="telefono" required>
  	<br>
  	<br>
  	Departamento: 
  	<select name="departamento" required>
  		@foreach($departamentos as $d)
  		<option value="{{$d->id}}">{{$d->nombre}}</option>
  		@endforeach
  	</select>
  	<br>
  	<input type="submit" value="Guardar">
  </form>

@endsection
