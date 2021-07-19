<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('ime', 100);
            $table->string('smjer', 50);// NTPP BS LMPP TOP EITP
            $table->string('razina_studija', 4);//PRED  ili DIPL
            $table->smallInteger('godina'); // 1  ili 2  ili 3
            $table->smallInteger('semestar');// 1 ili  2 ili ... ili 6 ...
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
        Schema::dropIfExists('courses');
    }
}
