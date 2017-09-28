<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableObsMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obs_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('topic');
            $table->dateTime('date');
            $table->text('text');
            $table->string('author',40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('obs_messages');
    }
}
