<?php

use Illuminate\Database\Seeder;

class VehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vehiculos')->insert([
            ["tipo de vehiculo" => "Frontier" , "Modelo" => "2012" , "Marca"=> "Nissan", "Descripcion"=> "Camioneta blanca", "responsable_id" => 1 , "amount" => 180000 ],
            ["tipo de vehiculo" => "Ranger" , "Modelo" => "2006" , "Marca"=> "Ford", "Descripcion"=> "Ford Ranger blanca", "responsable_id" => 1 , "amount" => 185000 ],
            ["tipo de vehiculo" => "Remolque" , "Modelo" => "2013" , "Marca"=> "Hechisa", "Descripcion"=> "Remolque con doble eje", "responsable_id" => 1 , "amount" => 200000 ],
            ["tipo de vehiculo" => "Estacas" , "Modelo" => "2004" , "Marca"=> "Nissan", "Descripcion"=> "Chasis largo con redila", "responsable_id" => 1 , "amount" => 185000 ],
            ["tipo de vehiculo" => "Motocicleta" , "Modelo" => "2011" , "Marca"=> "Izuka", "Descripcion"=> "Motocicleta color azul", "responsable_id" => 1 , "amount" => 125000 ],
        ]);
    }
}
