<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user')->unsigned()->nullable(false);
            $table->bigInteger('client')->unsigned()->nullable(false);
            $table->text('text')->nullable(false);
            $table->timestamps();

            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');;
            $table->foreign('client')->references('id')->on('clients')->onDelete('cascade');;
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
        Schema::dropIfExists('client_notes');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
