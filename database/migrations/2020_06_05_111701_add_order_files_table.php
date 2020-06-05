<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOrderFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('path')->nullable(false);
            $table->string('name')->nullable(false);
            $table->bigInteger('order')->unsigned()->nullable(false);

            $table->foreign('order')->references('id')->on('orders');
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
        Schema::dropIfExists('order_files');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
