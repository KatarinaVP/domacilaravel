<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateKompanijasMatbrojTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kompanijas', function (Blueprint $table) {
            $table->unique('maticni_broj');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kompanijas', function (Blueprint $table) {
            $table->dropUnique('maticni_broj');
        });
    }
}
