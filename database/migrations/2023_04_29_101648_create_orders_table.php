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
            $table->id();
            $table->timestamps();
            $table->string('status');
            $table->string('title');
            $table->string('customer');
            $table->string('customer_email');
            $table->string('customer_phone');
            $table->string('customer_address');
            $table->text('content');
            $table->json('files')->nullable();
            $table->bigInteger('manager')->unsigned();
            $table->foreign('manager')->references('id')->on('users');
            $table->bigInteger('contractor')->unsigned();
            $table->foreign('contractor')->references('id')->on('users');
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
