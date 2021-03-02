<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBedSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bed_seats', function (Blueprint $table) {
            $table->id();
            $table->integer('seat_no');
            $table->integer('floor_no');
            $table->string('room');
            $table->double('rent_per_day');
            $table->string('status');
            $table->string('type');
            $table->string('image');
            $table->boolean('active');
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
        Schema::dropIfExists('bed_seats');
    }
}
