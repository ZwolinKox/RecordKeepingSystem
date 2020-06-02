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

            $table->foreign('client')->references('id')->on('clients');
            $table->foreign('group')->references('id')->on('groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients_groups');
    }
}
