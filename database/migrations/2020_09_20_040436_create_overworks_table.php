<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOverworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overworks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('requestday'); // 申請日
            $table->time('start');  // 開始時間
            $table->time('end');  // 終了時間
            $table->integer('worktimeA');  // 残業時間A
            $table->integer('worktimeB');  // 残業時間B
            $table->integer('worktimeC');  // 残業時間C
            $table->integer('worktimeD');  // 残業時間D
            $table->string('place');  // 場所
            $table->string('reason');  // 理由
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
        Schema::dropIfExists('overworks');
    }
}
