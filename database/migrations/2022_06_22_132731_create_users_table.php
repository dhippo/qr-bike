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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('password_confirmation');
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('age')->nullable();
            $table->string('blood')->nullable();
            $table->string('phoneContact')->nullable();
            $table->string('nameContact')->nullable();
            $table->string('weight')->nullable();
            $table->string('size')->nullable();
            $table->string('photo')->nullable();
            $table->string('doctor')->nullable();
            $table->string('other')->nullable();
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
};


