<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('o_id');
            $table->unsignedBigInteger('e_id');
            $table->string('task_name');
            $table->date('start_date');
            $table->date('due_date');
            $table->boolean('task_status');
            $table->integer('fail_count');
            $table->timestamps();

            $table->foreign('o_id')->references('o_id')->on('orders');
            $table->foreign('e_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_tasks');
    }
}
