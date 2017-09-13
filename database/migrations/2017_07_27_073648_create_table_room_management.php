<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRoomManagement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_management', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room_num')->unique();
            $table->string('room_type');
            $table->string('owner');
            $table->integer('rent');
            $table->string('payment_time');
            $table->string('owner_phone');
            $table->string('owner_credit_card');
            $table->string('bank');
            $table->string('room_desc');
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
        Schema::dropIfExists('room_management');
    }
}
