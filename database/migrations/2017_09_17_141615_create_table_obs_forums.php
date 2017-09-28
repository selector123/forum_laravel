<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableObsForums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obs_forums', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('section');
            $table->timestamps();
            $table->integer('close');
            $table->string('name',40);
            $table->string('author',40);
            $table->string('last_post',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('obs_forums');
    }
}
