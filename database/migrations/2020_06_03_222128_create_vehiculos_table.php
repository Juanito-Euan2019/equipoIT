<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table ->string('tipo de vehiculo', 30);
            $table ->string('Modelo', 100 );
            $table ->string('Marca', 100 );
            $table ->string('Descripcion', 100 );
            $table ->bigInteger ('responsable_id'); 
            $table->timestamps();
            $table->softDeletes ('deleted_at', 0 );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
