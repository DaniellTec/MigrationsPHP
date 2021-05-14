<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElementoActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    
    {
        Schema::table('elementoActividades', function (Blueprint $table) 
        
        {
        
            $table->primary('idelementoActividades')->unsigned(); //AUTO_INCREMENT
            $table->foreign('idelementoActividades')->references('idElemento')->on('elementoActividades')->unsigned();
            $table->foreign('idelementoActividades')->references('idActividades')->on('elementoActividades')->unsigned();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elementoActividades');
    }
}
