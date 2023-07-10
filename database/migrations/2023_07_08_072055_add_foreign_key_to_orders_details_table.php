<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_details', function (Blueprint $table) {
            $table->foreign('order_id','fk_orders_details_to_orders')->references('id')->on('orders')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('room_id','fk_orders_details_to_room')->references('id')->on('room')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_details', function (Blueprint $table) {
            $table->dropForeign('fk_orders_details_to_orders');
            $table->dropForeign('fk_orders_details_to_room');
        });
    }
};
