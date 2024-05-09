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
        Schema::create('comets', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->text('introduction');
            $table->text('where_do_comets_come_from');
            $table->text('exploration_of_comets');
            $table->text('how_comets_get_their_name');
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
        Schema::dropIfExists('comets');
    }
};
