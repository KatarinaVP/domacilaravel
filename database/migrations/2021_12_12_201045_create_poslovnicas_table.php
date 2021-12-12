<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoslovnicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poslovnicas', function (Blueprint $table) {
            $table->id();
            $table->string('grad');
            $table->string('adresa');
            $table->bigInteger('kompanija_id')->unsigned()->index();
            $table->foreign('kompanija_id')->references('id')->on('kompanijas')->onDelete('cascade');
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
        Schema::dropIfExists('poslovnicas');
    }
}
