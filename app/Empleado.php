<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public function departamento()
    {
        return $this->belongsTo('App\Departamento');
    }

	public function proyecto()
    {
        return $this->hasOne('App\Proyecto');
    }
    public function proyectos()
    {
        return $this->belongsToMany('App\Proyecto')->withPivot('fechaInicio', 'fechaFin');
    }
    public function jefeDe()
    {
        return $this->hasOne('App\Departamento','jefe_id');
    }
}
