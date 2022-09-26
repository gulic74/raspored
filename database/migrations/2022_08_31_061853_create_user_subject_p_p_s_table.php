<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSubjectPPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_subject_p_p_s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('subject_p_p_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('user_subject_p_p_s', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;        
            $table->foreign('subject_p_p_id')->references('id')->on('subject_p_p_s')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_subject_p_p_s');
    }
}
