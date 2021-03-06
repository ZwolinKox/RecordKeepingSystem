<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsGroupsConnectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_groups', function (Blueprint $table) {
            $table->bigInteger('client')->unsigned()->nullable(false);
            $table->bigInteger('group')->unsigned()->nullable(false);

            $table->foreign('client')->references('id')->on('clients')->onDelete('cascade');;
            $table->foreign('group')->references('id')->on('groups')->onDelete('cascade');;
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
        Schema::dropIfExists('clients_groups');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
