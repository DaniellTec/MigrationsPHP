<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subscripcion', function (Blueprint $table) 
        
        {
        
            $table->primary('idSubscripcion'->unsigned());
            $table->date('fechaInicio');
            $table->date('fechaRenovacion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscripcion');
    }
}
