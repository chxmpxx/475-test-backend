<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJewelryInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jewelry_infos', function (Blueprint $table) {
            $table->id();
            $table->string('o_id');
            $table->string('jewelry_type');
            $table->integer('jewelry_piece');
            $table->string('gem_image');
            $table->double('gem_weight', 5, 2);
            $table->string('gem_size');
            $table->string('gem_name');
            $table->integer('gem_pieces');
            $table->timestamps();

            $table->foreign('o_id')->references('o_id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jewelry_infos');
    }
}
