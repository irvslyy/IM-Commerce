<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_cart', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('Items_id');
            $table->string('cart_cookie');
            $table->string('qty');
            $table->string('logistic_number');
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
        Schema::dropIfExists('_cart');
    }
}
