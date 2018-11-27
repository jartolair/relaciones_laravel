<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;


class ClienteController extends Controller
{

  public function index ()
  {
  	$clientes=Cliente::all();
      return view ('clientes.index', array('clientes' => $clientes));
  }

  public function get ($id)
  {
  	$cliente=Cliente::find($id);
      return view ('clientes.cliente', array('cliente' => $cliente));
  }

}
