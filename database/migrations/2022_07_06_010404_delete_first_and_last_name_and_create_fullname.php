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
        $table->dropColumn('firstname');
        $table->dropColumn('lastname');
        $table->string('fullname')->after('active_token')->nullable();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->string('firstname')->nullable();
        $table->string('lastname')->nullable();
        $table->dropColumn('fullname');
    }
};
