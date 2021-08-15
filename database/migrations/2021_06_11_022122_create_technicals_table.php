<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technicals', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('personal_id');
            $table->string('meter_no');
            $table->string('meter_rating')->nullable();
            $table->string('ph')->nullable();
            $table->string('meter_loc')->nullable();
            $table->string('credit_meter')->nullable();
            $table->string('prepaid_meter')->nullable();
            $table->string('type')->nullable();
            $table->string('meter_reading')->nullable();
            $table->string('meter_bal')->nullable();
            $table->string('pole_dist')->nullable();
            $table->string('size')->nullable();
            $table->string('pole_no')->nullable();
            $table->string('trans_no')->nullable();
            $table->string('trans_rate')->nullable();
            $table->string('lines_per_pole')->nullable();
            $table->string('no_of_poles')->nullable();
            $table->string('line_condition')->nullable();
            $table->string('damage_length')->nullable();
            $table->string('gmt')->nullable();
            $table->string('pmt')->nullable();
            $table->string('cwa')->nullable();
            $table->string('height')->nullable();
            $table->string('pole_condition')->nullable();
            $table->string('meter_phase_inst')->nullable();
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
        Schema::dropIfExists('technicals');
    }
}
