<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersModuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usersModulo', function (Blueprint $table) 
        
        {
           
            $table->primary('idUsersModulo'->unsigned());
            $table->foreign('idUsers')->references('users')->on('idUsers');
            $table->foreign('idProfesor')->references('profesor')->on('idProfesor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersModulo');
    }
}
