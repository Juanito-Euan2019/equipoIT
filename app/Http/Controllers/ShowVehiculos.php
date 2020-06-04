<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Responsable;

class ShowVehiculos extends Controller
{
    //
    public function get_vehiculos($id){
        $responsable = Responsable::with('vehiculos')->where('id', $id)->get()->toArray();
        dd($responsable);
    }
}
