<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            // $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('remarks_id')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('technical_id')->nullable();
            $table->string('Reccomendation_id')->nullable();
            $table->string('customer_no');
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('contact');
            $table->string('business')->nullable();
            $table->string('comp_hse')->nullable();
            $table->string('proj_cust')->nullable();
            $table->string('est_sensor')->nullable();
            $table->string('email')->nullable();
            $table->string('dig_address')->nullable();
            $table->string('coords')->nullable();
            $table->string('status')->default('no');
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
        Schema::dropIfExists('personals');
    }
}
