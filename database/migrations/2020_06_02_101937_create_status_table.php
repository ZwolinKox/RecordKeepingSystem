<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('status')->nullable(false);
            $table->bigInteger('created_by')->unsigned()->nullable(false);
            $table->bigInteger('order')->unsigned()->nullable(false);
            $table->timestamp('date')->nullable(false);

            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');;
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
        Schema::dropIfExists('status');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
