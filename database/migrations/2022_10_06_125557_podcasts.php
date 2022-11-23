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
       Schema::create('podcasts', function (Blueprint $table) {
           $table->id();
           $table->string('id_podcast');
           $table->string('id_programa');
          
           $table->string('titulo');
           $table->string('url');
           $table->string('descripcion');
           $table->string('fecha emision');
        
           
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
