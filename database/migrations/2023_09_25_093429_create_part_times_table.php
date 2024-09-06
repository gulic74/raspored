<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_times', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); 
            $table->unsignedBigInteger('course_id');
            $table->date('date');
            $table->smallInteger('vrijeme');
            $table->string('smjer', 50);// NTPP BS LMPP TOP EITP
            $table->string('studij', 4);//PRED  ili DIPL
            $table->smallInteger('godina'); // 1  ili 2  ili 3
            $table->smallInteger('semestar');// 1 ili  2 ili ... ili 6 ...
            $table->string('tip', 15);// Predavanje, Vjezbe
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('course_id')
            ->references('id')->on('courses')
            ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('part_times');
    }
}
