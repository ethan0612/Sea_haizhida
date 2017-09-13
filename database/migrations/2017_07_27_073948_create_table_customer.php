<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identify_id')->unique();
            $table->string('name');
            $table->integer('sex');
            $table->integer('age');
            $table->string('phone');
            $table->string('province');
            $table->string('city');
            $table->string('region');
            $table->string('wechat');
            $table->integer('is_order');
            $table->integer('channel');
            $table->string('comment');
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
        Schema::dropIfExists('customer');
    }
}
