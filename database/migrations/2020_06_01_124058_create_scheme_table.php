<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchemeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheme', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('scheme');
            $table->tinyInteger('cycle');
            $table->bigInteger('total_number')->unsigned();
            $table->bigInteger('day_number')->unsigned();
            $table->bigInteger('week_number')->unsigned();
            $table->bigInteger('month_number')->unsigned();
            $table->bigInteger('year_number')->unsigned();
            $table->date('last_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scheme');
    }
}
