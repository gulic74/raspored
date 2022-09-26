<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectPPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_p_p_s', function (Blueprint $table) {
            $table->id();
            $table->string('name');   //   ime kolegija
            $table->string('course');   //   smjer Nautika/Brodostrojarstvo
            $table->string('semester'); //  ZIMSKI/LJETNI
            $table->integer('hours');  //broj sati
            $table->integer('current_hours');  //trenutni broj sati
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
        Schema::dropIfExists('subject_p_p_s');
    }
}
