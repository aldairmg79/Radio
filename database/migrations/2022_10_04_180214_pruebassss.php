<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estancias', function(Blueprint $table){
            $table->id(); 
            $table->string('name');
            $table->text('descripcion');
            $table->timestamps();//created_at se almacena hora y fecha de un registro  y update_at Fecha y hora de ultima actualizacion
   
           } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estancias');
    }
};
