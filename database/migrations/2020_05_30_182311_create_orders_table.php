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
            $table->string('name')->nullable();
            $table->bigInteger('created_by')->unsigned()->nullable(false);
            $table->bigInteger('assigned')->unsigned()->nullable();
            $table->bigInteger('client')->unsigned()->nullable(false);
            $table->bigInteger('item_type')->unsigned()->nullable(false);
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
            $table->float('estimated_price')->default(0);
            $table->float('advance_pay')->default(0);

            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');;
            $table->foreign('assigned')->references('id')->on('users')->onDelete('cascade');;
            $table->foreign('client')->references('id')->on('clients')->onDelete('cascade');;
            $table->foreign('item_type')->references('id')->on('item_types')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('orders');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
