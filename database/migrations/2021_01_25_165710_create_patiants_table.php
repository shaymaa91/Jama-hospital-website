<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patiants', function (Blueprint $table) {
            $table->id();            
            $table->string('fullname');
            $table->string('type');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('blood_group');
            $table->string('city');
            $table->string('address');
            $table->string('mobile');
            $table->string('image');
            $table->boolean('status');
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
        Schema::dropIfExists('patiants');
    }
}
