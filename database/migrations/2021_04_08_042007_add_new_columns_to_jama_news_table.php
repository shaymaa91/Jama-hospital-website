<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToJamaNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jama_news', function (Blueprint $table) {
            $table->string("news_img");
            $table->string("auth_img");
            $table->string("auth_name");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jama_news', function (Blueprint $table) {
            $table->dropColumn("news_img");
            $table->dropColumn("auth_img");
            $table->dropColumn("auth_name");
        });
    }
}
