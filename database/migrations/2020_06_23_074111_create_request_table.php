<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_request', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('request_code');
            $table->string('request_list');
            $table->string('stock_code');
            $table->string('items_code');
            $table->string('wh_code');
            $table->string('product_code');
            $table->string('product_name');
            $table->integer('qty');
            $table->string('status');
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
        Schema::dropIfExists('_request');
    }
}
