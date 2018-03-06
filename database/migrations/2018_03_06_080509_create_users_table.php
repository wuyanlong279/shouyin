<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('uid');
            $table->string('name', 100)->comment('会员名字');
            $table->smallInteger('phone')->uniqid()->comment('会员电话');
            $table->char('sex', 1)->default($value = 'm')->comment('会员性别');
            $table->tinyInteger('age')->default($value = 10)->comment('会员年龄');
            $table->integer('total')->default($value = 3)->comment('会员购买总量');
            $table->integer('total_year')->default($value = 3)->comment('会员一年购买量');
            $table->tinyInteger('excellent')->default($value = 0)->comment('会员优质客户');
            $table->integer('adid')->default($value = 1)->comment('会员所属专卖店');
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
        Schema::dropIfExists('users');
    }
}
