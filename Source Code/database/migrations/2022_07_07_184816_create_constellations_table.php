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
        Schema::create('constellations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('overview');
            $table->text('definition');
            $table->text('origin');
            $table->string('image');
            $table->text('meaning');
            $table->string('symbolism');
            $table->string('right_ascension');
            $table->string('declination');
            $table->string('area');
            $table->string('main_stars');
            $table->text('bordering_constellations');
            $table->string('visible_at_latitudes');
            $table->text('meteor_showers');
            $table->Integer('id_ae');
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
        Schema::dropIfExists('constellations');
    }
};
