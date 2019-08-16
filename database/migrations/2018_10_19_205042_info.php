<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Info extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        // #college table
        // Schema::create('college', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('college_acronym');
        //     $table->string('college_name');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });

        // //prog_table
        // Schema::create('program', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('college_id');
        //     $table->string('prog_acronym');
        //     $table->string('prog_name');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('user_role');
        // Schema::dropIfExists('college');
        // Schema::dropIfExists('program');
    }
}
