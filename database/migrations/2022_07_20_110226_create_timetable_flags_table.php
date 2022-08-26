<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetableFlagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetable_flags', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('aktivanRedovni')->default(1);
            $table->string('komentarRedovni', 150);
            $table->tinyInteger('aktivanIzvanredni')->default(1);
            $table->string('komentarIzvanredni', 150);
            $table->tinyInteger('aktivanPPO')->default(1);
            $table->string('komentarPPO', 150);
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
        Schema::dropIfExists('timetable_flags');
    }
}
