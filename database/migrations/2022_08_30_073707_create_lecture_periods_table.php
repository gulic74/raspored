<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturePeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecture_periods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subjectPP_id'); 
            $table->unsignedBigInteger('classroom_id'); 
            $table->string('day');
            $table->string('hours');
            $table->string('week');
            $table->text('comment')->nullable();
            $table->timestamps();

            $table->foreign('subjectPP_id')
                ->references('id')->on('subject_p_p_s')
                ->onDelete('cascade');

            $table->foreign('classroom_id')
            ->references('id')->on('classrooms')
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
        Schema::dropIfExists('lecture_periods');
    }
}
