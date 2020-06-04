<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    //
    protected $table = 'responsable';

    public function vehiculos(){
        return $this->hasMany('App\Vehiculos', 'responsable_id');
    }
}
