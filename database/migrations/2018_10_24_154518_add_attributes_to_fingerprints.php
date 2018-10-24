<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAttributesToFingerprints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fingerprints', function($table) {
            $table->integer('brightness')->default(0);
            $table->integer('saturation')->default(0);
            $table->integer('exposure')->default(0);
            $table->integer('contrast')->default(0);
            $table->integer('vibrance')->default(0);
            $table->unsignedInteger('sharpen')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('brightness');
        $table->dropColumn('saturation');
        $table->dropColumn('exposure');
        $table->dropColumn('contrast');
        $table->dropColumn('vibrance');
        $table->dropColumn('sharpen');
    }
}
