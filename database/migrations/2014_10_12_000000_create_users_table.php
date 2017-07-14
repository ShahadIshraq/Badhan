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
            $table->date('dateOfBirth')-> nullable();
            $table->string('bloodGroup')-> nullable(false);
            $table->string('area')->nullable();;
            $table->string('hall')->nullable(false);
            $table->string('room')->nullable();
            $table->date('lastDonation')->nullable();
            $table->string('email')->unique();
            $table->string('password')-> nullable(false);
            $table->rememberToken();
            $table->boolean('confirmed')->default(0);
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
