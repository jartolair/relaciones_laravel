<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Empleado;

class Proyecto extends Model
{
    public function empleado()
    {
        return $this->belongsTo('App\Empleado');
    }
    public function empleados()
    {
        return $this->belongsToMany('App\Empleado')->withPivot('fechaInicio', 'fechaFin');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}
