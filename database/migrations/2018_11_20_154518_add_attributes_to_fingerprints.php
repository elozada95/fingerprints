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
            $table->enum('hand', ['left', 'right'])->nullable();
            $table->enum('region', ['thumb', 'index', 'middle', 'ring', 'pinky', 'palm'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('hand');
        $table->dropColumn('region');
    }
}
