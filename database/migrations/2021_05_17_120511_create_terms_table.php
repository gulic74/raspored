<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms', function (Blueprint $table) {
            $table->id();
            $table->string('tip', 20);//PREDAVANJE ili VJEŽBE
            $table->string('grupa', 20); //svi (1-2)  ili  (3-4)  ili  (1-3)  ...
            $table->string('dan', 3); // pon  uto  sri ...
            $table->string('semestar', 6);//LJETNI  ili ZIMSKI
            $table->smallInteger('pocetak');// 12
            $table->smallInteger('kraj'); // 14
            $table->tinyInteger('aktivan')->default(1);
            $table->string('komentar', 150);
            $table->string('napomena', 150);
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
        Schema::dropIfExists('terms');
    }
}
