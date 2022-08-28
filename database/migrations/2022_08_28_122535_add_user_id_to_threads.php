<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('threads', function (Blueprint $table) {
            // threadsテーブルに新しくuser_idカラムを追加する
            $table->unsignedBigInteger('user_id')->after('id');

            // threadsテーブルのuser_idカラムをusersテーブルのidカラムに関連付け
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::table('threads', function (Blueprint $table) {
            $table->dropForeign('threads_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
};
