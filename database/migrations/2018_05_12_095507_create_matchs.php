<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchs', function (Blueprint $table) {
            $table->increments('id'); 
            $table->datetime('Date');
            $table->string('Location'); 
            $table->string('HomeTeam');
            $table->string('AwayTeam'); 
            $table->string('Group');
            $table->string('Result');
            $table->rememberToken(); 
            $table->timestamps();  /* ajoute la date de creation et modification */
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
}
