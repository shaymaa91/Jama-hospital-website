<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();            
            $table->string('fullname');
            $table->string('email');
            $table->string('gender');
            $table->string('username');
            $table->string('degree');
            $table->date('date_of_birth');
            $table->string('specialist');
            $table->string('department');
            $table->string('city');
            $table->string('address');
            $table->string('mobile');
            $table->double('salary');
            $table->string('image');
            $table->text('short_bio');
            $table->string('status');
            $table->softDeletes();
         

            
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
        Schema::dropIfExists('doctors');
    }
}
