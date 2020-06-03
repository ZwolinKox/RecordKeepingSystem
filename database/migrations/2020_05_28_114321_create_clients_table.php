<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable(false);
            $table->boolean('private')->nullable(false);
            $table->char('phone1', 45)->nullable();
            $table->char('phone2', 45)->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->string('address')->nullable();
            $table->boolean('send_sms')->nullable();
            $table->boolean('send_email')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('clients');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
