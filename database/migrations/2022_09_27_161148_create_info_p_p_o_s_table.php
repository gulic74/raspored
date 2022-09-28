<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoPPOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_p_p_o_s', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('aktivanNB1')->default(1);
            $table->string('ciklusNB1', 150);
            $table->tinyInteger('aktivanNB2')->default(1);
            $table->string('ciklusNB2', 150);
            $table->tinyInteger('aktivanBB1')->default(1);
            $table->string('ciklusBB1', 150);
            $table->tinyInteger('aktivanBB2')->default(1);
            $table->string('ciklusBB2', 150);
            $table->string('defaultNautikaUciona', 15);
            $table->string('defaultBrodostrojarstvoUciona', 15);
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
        Schema::dropIfExists('info_p_p_o_s');
    }
}
