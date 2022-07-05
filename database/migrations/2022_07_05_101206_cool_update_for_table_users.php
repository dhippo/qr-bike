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
        Schema::table('users', function (Blueprint $table) {
            $table->text('infos')->after('firstname');
            $table->dropColumn('blood');
            $table->dropColumn('weight');
            $table->dropColumn('size');
            $table->dropColumn('country');
            $table->dropColumn('city');
            $table->dropColumn('phoneContact');
            $table->dropColumn('nameContact');
            $table->dropColumn('nameDoctor');
            $table->dropColumn('phoneDoctor');
            $table->dropColumn('other');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('blood')->nullable();
            $table->string('weight')->nullable();
            $table->string('size')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('phoneContact')->nullable();
            $table->string('nameContact')->nullable();
            $table->string('nameDoctor')->nullable();
            $table->string('phoneDoctor')->nullable();
            $table->string('other')->nullable();
            $table->dropColumn('infos');
        });


    }
};
