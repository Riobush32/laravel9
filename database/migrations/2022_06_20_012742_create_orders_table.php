<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->integer('cartid');
            $table->integer('productid');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('province');
            $table->string('city');
            $table->string('street');
            $table->string('postal_code');
            $table->integer('status');
            $table->integer('jumlah');
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
        Schema::dropIfExists('orders');
    }
};
