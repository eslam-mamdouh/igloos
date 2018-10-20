<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SpaceImgs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spaceImgs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('space_id')->unsigned();
            $table->foreign('space_id')->references('id')->on('spaces');
            $table->integer('img_url');
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
        Schema::dropIfExists('spaceImgs');
    }
}
