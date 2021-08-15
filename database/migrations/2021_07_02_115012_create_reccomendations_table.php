<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReccomendationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reccomendations', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('personal_id');
            $table->string('rate_to_install')->nullable();
            $table->string('extra_cable_needed')->nullable();
            $table->string('date_of_visit');
            $table->string('inspected_by');
            $table->string('del')->default('no');
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
        Schema::dropIfExists('reccomendations');
    }
}
