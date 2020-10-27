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
            $table->string('user_name');  // リレーションしたユーザー名
            $table->date('requestday'); // 申請日
            $table->time('start');  // 開始時間
            $table->time('end');  // 終了時間
            $table->string('worktime');  // 残業時間
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
