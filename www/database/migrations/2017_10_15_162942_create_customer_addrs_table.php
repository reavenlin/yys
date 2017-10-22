<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerAddrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_addrs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->integer('introducer_id');
            $table->tinyInteger('receiver_type');
            $table->string('receiver_name',20);
            $table->string('receiver_phone',64);
            $table->string('receiver_addr',64);
            $table->tinyInteger('is_default');
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
        Schema::dropIfExists('customer_addrs');
    }
}
