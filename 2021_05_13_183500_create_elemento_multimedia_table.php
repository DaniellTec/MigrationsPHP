<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElementoMultimediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('elementoMultimedia', function (Blueprint $table) 
        
        {
      
            $table->primary('elementoMultimedia')->unsigned();
            $table->foreign('idElemento')->references('elemento')->on('idElemento');
            $table->foreign('idMultimedia')->references('multimedia')->on('idMultimedia');
            // SQLSTATE[42S02]: Base table or view not found: 1146 Table 'laravel.elementoMultimedia' 
            //doesn't exist (SQL: alter table `elementoMultimedia` add primary key `elementomultimedia_elementomultimedia_primary`(`elementoMultimedia`))
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elementoMultimedia');
    }
}
