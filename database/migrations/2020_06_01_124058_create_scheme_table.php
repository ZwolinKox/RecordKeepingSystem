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
            $table->bigInteger('total_number');
            $table->bigInteger('day_number');
            $table->bigInteger('week_number');
            $table->bigInteger('month_number');
            $table->bigInteger('year_number');
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
