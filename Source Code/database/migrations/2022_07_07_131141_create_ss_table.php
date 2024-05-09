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
        Schema::create('ss', function (Blueprint $table) {
            $table->id();
            $table->string('solar_system_name');
            $table->text('overview');
            $table->text('when_discovered');
            $table->text('atmosphere');
            $table->text('namesake');
            $table->text('potential_for_life');
            $table->string('image');
            $table->text('size_and_distance');
            $table->text('orbit_and_rotation');
            $table->text('moons');
            $table->text('rings');
            $table->text('formation');
            $table->text('structure');
            $table->text('magnetosphere');
            $table->text('surface');
            $table->tinyInteger('id_ae'); 
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
        Schema::dropIfExists('ss');
    }
};
