<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeks', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //ime tjedna 1.tjedan, 2.tjedan, može i broj 1 2 ili 3
            $table->date('start_day'); //početni datum
            $table->string('course');  //   smjer Nautika/Brodostrojarstvo
            $table->string('semester');  //  ZIMSKI/LJETNI
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
        Schema::dropIfExists('weeks');
    }
}
