<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name')-> nullable(false);
            $table->date('dateOfBirth');
            $table->string('bloodGroup')-> nullable(false);
            $table->string('area');
            $table->string('hall')-> nullable(false);
            $table->string('room');
            $table->date('lastDonation');
            $table->string('email')->unique();
            $table->string('password')-> nullable(false);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
