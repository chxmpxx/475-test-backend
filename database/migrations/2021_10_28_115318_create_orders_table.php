<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->string('o_id')->primary(); 
            $table->unsignedBigInteger('c_id');
            $table->date('order_date');
            $table->date('deadline_date');
            $table->string('order_image');
            $table->string('status');
            $table->string('metal');
            $table->timestamps();

            $table->foreign('c_id')->references('c_id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
