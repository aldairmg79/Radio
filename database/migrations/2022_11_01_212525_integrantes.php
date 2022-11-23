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
        Schema::create('integrantes', function (Blueprint $table) {
            $table->id();
            $table->string('id_integrantes');
            $table->string('fecha_ingreso');
           
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('facebook_url');
            $table->string('twitter_url');
            $table->string('instagram_url');
            $table->string('foto');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
