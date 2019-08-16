<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('users', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('role_id');
        //     $table->string('username');
        //     $table->string('password');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
    
          //user profile table
         Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('program_id');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->integer('attainment_id');
            $table->string('sex');
            $table->string('student_no');
            $table->rememberToken();
            $table->timestamps();
        });

        //  Schema::create('attainment', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });

        //   Schema::create('role', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('role_name');
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
        // Schema::dropIfExists('users');
        Schema::dropIfExists('profile');
        // Schema::dropIfExists('attainment');
        //  Schema::dropIfExists('role');
    }
}
