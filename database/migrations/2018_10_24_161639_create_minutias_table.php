<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinutiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minutias', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fingerprint_id');
            $table->integer('xCoord');
            $table->integer('yCoord');
            $table->double('angle');
            $table->timestamps();
        });

        Schema::table('minutias', function($table) {
            $table->foreign('fingerprint_id')->references('id')->on('fingerprints')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('minutias');
    }
}
