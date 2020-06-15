<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user')->unsigned()->nullable(false);
            $table->bigInteger('order')->unsigned()->nullable(false);
            $table->text('text')->nullable(false);
            $table->timestamps();

            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');;
            $table->foreign('order')->references('id')->on('orders')->onDelete('cascade');;
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
        Schema::dropIfExists('order_notes');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
