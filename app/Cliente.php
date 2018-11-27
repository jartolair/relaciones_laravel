<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Proyecto;

class Cliente extends Model
{
    public function proyectos()
    {
        return $this->hasMany('App\Proyecto');
    }
}
