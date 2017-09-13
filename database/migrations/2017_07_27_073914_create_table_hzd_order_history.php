<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHzdOrderHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hzd_order_history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_num');
            $table->string('order_price');
            $table->string('order_original');
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('customer_identity_id');
            $table->integer('room_num');
            $table->string('room_type');
            $table->string('room_price');
            $table->string('order_from_date');
            $table->string('order_end_date');
            $table->string('history_status');
            $table->string('payment_status');
            $table->string('status');
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
        Schema::dropIfExists('hzd_order_history');
    }
}
