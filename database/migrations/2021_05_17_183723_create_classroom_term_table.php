<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomTermTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classroom_term', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('classroom_id')->unsigned();
            $table->bigInteger('term_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('classroom_term', function($table) {
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');;        
            $table->foreign('term_id')->references('id')->on('terms')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classroom_term');
    }
}
