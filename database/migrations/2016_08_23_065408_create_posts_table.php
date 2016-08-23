<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table){
          $table->increments('id');
          $table->string('address_from_to',255);
          $table->string('title',128);
          $table->text('content');
          $table->integer('cost');
          $table->integer('rating');
          $table->date('time');
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')
                ->references('id')->on('users');
          $table->integer('city_id')->unsigned();
          $table->foreign('city_id')
                ->references('id')->on('cities');
          $table->integer('category_id')->unsigned();
          $table->foreign('category_id')
                ->references('id')->on('categories');
          $table->timestamps();
          $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}