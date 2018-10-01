<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartamento', function (Blueprint $table) {
            $table->increments('id_apto');
            $table->string('apto_localizacion');
            $table->string('apto_precio');
            $table->string('apto_metro');
            $table->string('apto_habitacion');
            $table->string('apto_piso');
            $table->string('apto_foto');
            $table->text('apto_descripcion');
            $table->integer('id_user'); //Empleado asignado        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartamento');
    }
}
