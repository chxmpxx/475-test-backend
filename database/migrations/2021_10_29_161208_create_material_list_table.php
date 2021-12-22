<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_lists', function (Blueprint $table) {
            $table->id('taken_no');
            $table->unsignedBigInteger('m_id');
            $table->string('o_id');
            $table->unsignedBigInteger('e_id');
            $table->date('taken_date');
            $table->double('before_amount', 15, 2);
            $table->date('return_date')->nullable()->default(null);
            $table->double('after_amount', 15, 2)->nullable()->default(null);
            $table->timestamps();

            $table->foreign('m_id')->references('m_id')->on('materials');
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
        Schema::dropIfExists('material_lists');
    }
}
