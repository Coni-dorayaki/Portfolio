<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->date('days_1');  // 行動日１
            $table->date('days_2');  // 行動日１
            $table->date('days_3');  // 行動日１
            $table->date('days_4');  // 行動日１
            $table->date('days_5');  // 行動日１
            $table->date('days_6');  // 行動日１
            $table->date('days_7');  // 行動日１
            $table->string('actionreport_1');  // 行動報告１
            $table->string('actionreport_2');  // 行動報告２
            $table->string('actionreport_3');  // 行動報告３
            $table->string('actionreport_4');  // 行動報告４
            $table->string('actionreport_5');  // 行動報告５
            $table->string('actionreport_6');  // 行動報告６
            $table->string('actionreport_7');  // 行動報告７
            $table->string('topics');  // Topics
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
        Schema::dropIfExists('reports');
    }
}
