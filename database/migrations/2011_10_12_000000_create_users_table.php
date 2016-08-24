<?php

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
            $table->increments('id');
            $table->string('name',128);
            $table->string('email',128)->unique();
            $table->string('password',128);
            $table->date('birthday')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('phone_number',11)->nullable();
            $table->string('avatar')->default('default.png');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')
                  ->references('id')->on('cities');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
