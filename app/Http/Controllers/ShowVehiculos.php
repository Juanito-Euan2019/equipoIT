<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Responsable;

class ShowVehiculos extends Controller
{
    //
    public function get_vehiculos($id){
            $vehiculos = Responsable::with(['vehiculos'])->where('id', $id)->get()->toArray();
            return view('pages.home', ['vehiculos' => $vehiculos[0]["vehiculos"] ] );
        //dd($responsable);
    }
}
