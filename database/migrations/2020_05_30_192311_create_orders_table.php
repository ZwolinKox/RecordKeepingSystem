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
            $table->bigIncrements('id');
            $table->string('name')->nullable(false);
            $table->unsignedTinyInteger('status')->nullable(false);
            $table->bigInteger('created_by')->nullable(false);
            $table->bigInteger('assigned')->nullable();
            $table->bigInteger('client')->nullable(false);
            $table->bigInteger('item_type')->nullable(false);
            $table->string('producer')->nullable(false);
            $table->string('model')->nullable(false);
            $table->string('serial_number')->nullable(false);
            $table->date('buy_date')->nullable();
            $table->string('warranty_number')->nullable();
            $table->date('begin_date')->nullable(false);
            $table->date('end_date')->nullable(false);
            $table->text('info')->nullable();
            $table->text('issue')->nullable();
            $table->unsignedTinyInteger('delivery_method')->nullable(false);
            $table->unsignedTinyInteger('pickup_method')->nullable(false);
            $table->float('estimated_price')->nullable(false);
            $table->float('advance_pay')->nullable(false);
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
