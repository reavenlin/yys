<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockExchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_exchanges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('outer_order_id');
            $table->integer('product_id');
            $table->tinyInteger('exchange_from');
            $table->integer('num');
            $table->string('reason',30);
            $table->tinyInteger('status');
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
        Schema::dropIfExists('stock_exchanges');
    }
}
