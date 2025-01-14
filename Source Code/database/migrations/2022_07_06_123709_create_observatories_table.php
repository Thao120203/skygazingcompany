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
        Schema::create('observatories', function (Blueprint $table) {
            $table->id();
            $table->string('observatory_name');
            $table->string('category');
            $table->string('image');
            $table->string('establish');
            $table->string('location');
            $table->text('overview');
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
        Schema::dropIfExists('observatories');
    }
};
