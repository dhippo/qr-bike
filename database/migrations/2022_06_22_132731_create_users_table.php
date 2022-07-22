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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('password_confirmation');
            $table->string('token')->nullable();
            $table->boolean('active_token')->default(false);
            $table->string('photo')->nullable();
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('sex')->nullable();
            $table->string('age')->nullable();
            $table->string('blood')->nullable();
            $table->string('weight')->nullable();
            $table->string('size')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('phoneContact')->nullable();
            $table->string('nameContact')->nullable();
            $table->string('nameDoctor')->nullable();
            $table->string('phoneDoctor')->nullable();
            $table->string('other')->nullable();
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
};


