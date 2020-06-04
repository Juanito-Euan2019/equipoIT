<?php

use Illuminate\Database\Seeder;

class ResponsableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB :: table ('responsable')->insert([ 
            ["name" => "Gerencia", "address" => "CAPA" , "phone" => "9841802535", "email" => 'Gerencia@gmail.com' ], 
            ["name" => "Subgerencia administrativa", "address" => "CAPA", "phone" => "9841641252", "email" =>'Subgerenciadministrativa@gmail.com' ],
            ["name" => "Subgerencia administrativa", "address" => "CAPA", "phone" => "9841885626", "email" =>' gerenciaAdministrativa@gmail.com' ],  
            ["name" => "Subgerencia comercial", "address" => "CAPA", "phone" => "984122332", "email" => 'SubgerenciaComercial@gmail.com' ],  
            ["name" => "Subgerencia comercial", "address" => "CAPA", "phone" => "984122356", "email" => 'SubgerenciaComercial@gmail.com' ],      
        ]);
    }
}
