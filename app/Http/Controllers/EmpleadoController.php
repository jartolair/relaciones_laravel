<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Departamento;


class EmpleadoController extends Controller
{
  public function index ()
  {
  	$empleados=Empleado::all();
      return view ('empleados.index', array('empleados' => $empleados));
  }

  public function get ($id)
  {
  	$empleado=Empleado::find($id);
      return view ('empleados.empleado', array('empleado' => $empleado));
  }

  public function formulario()
  {
    $departamentos=Departamento::all();
    return view ('empleados.insert', array('departamentos' => $departamentos));
  }

  public function insert (Request $request)
  {
    $empleado=new Empleado();
    $empleado->nombre=$request->input("nombre");
    $empleado->apellido1=$request->input("apellido1");
    $empleado->apellido2=$request->input("apellido2");
    $empleado->email=$request->input("email");
    $empleado->telefono=$request->input("telefono");
    $empleado->departamento_id=$request->input("departamento");
    $empleado->save();
    return $this->index();
  }
}
