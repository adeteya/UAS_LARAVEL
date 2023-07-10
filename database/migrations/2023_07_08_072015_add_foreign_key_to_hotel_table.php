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
        Schema::table('hotel', function (Blueprint $table) {
            $table->foreign('room_id','fk_hotel_to_room')->references('id')->on('room')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hotel', function (Blueprint $table) {
            $table->dropForeign('fk_hotel_to_room');
           
        });
    }
};
