<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    //
    protected $table = 'vehiculos';

    public function responsable(){
        return $this->belongsToMany('App\Responsable', 'id');
    }
}
