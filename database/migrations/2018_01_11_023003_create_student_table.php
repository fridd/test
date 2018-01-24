<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->increments('id');
            $table->char('username_id',150)->comment('学号');
            $table->char('name',50)->comment('姓名');
            $table->char('sex',10)->comment('性别');
            $table->char('dance',50)->comment('舞蹈');
            $table->string('music', 100)->comment('音乐');
            $table->text('art',255)->comment('美术');
            $table->text('english',255)->comment('英语');
            $table->text('sport',255)->comment('运动');
            $table->text('hobby',255)->comment('爱好');
            $table->string('skill', 255)->comment('特长');
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
        Schema::dropIfExists('student');
    }
}
