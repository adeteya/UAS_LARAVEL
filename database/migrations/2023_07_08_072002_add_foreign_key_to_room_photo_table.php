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
        Schema::table('room_photo', function (Blueprint $table) {
            $table->foreign('room_id','fk_room_photo_to_room')->references('id')->on('room')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('room_photo', function (Blueprint $table) {
            $table->dropForeign('fk_room_photo_to_room');
        });
    }
};
