<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            // $table->string('remarks_id')->nullable();
            // $table->string('customer_id')->nullable();
            // $table->string('technical_id')->nullable();
            // $table->string('Reccomendation_id')->nullable();
            $table->string('personal_id')->nullable();
            $table->string('customer_no', 50)->nullable();
            $table->string('name', 50)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('contact', 50)->nullable();
            $table->string('business', 50)->nullable();
            $table->string('comp_hse', 50)->nullable();
            $table->string('proj_cust', 50)->nullable();
            $table->string('est_sensor', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('dig_address', 50)->nullable();
            $table->string('coords', 50)->nullable();

            $table->string('acc_no', 50)->nullable();
            $table->string('spn', 50)->nullable();
            $table->string('geocode', 50)->nullable();
            $table->string('structure_id', 50)->nullable();
            $table->string('service_type', 50)->nullable();

            $table->string('meter_no', 50)->nullable();
            $table->string('meter_rating', 50)->nullable();
            $table->string('ph', 50)->nullable();
            $table->string('meter_loc', 50)->nullable();
            $table->string('credit_meter', 50)->nullable();
            $table->string('prepaid_meter', 50)->nullable();
            $table->string('type', 50)->nullable();
            $table->string('meter_reading', 50)->nullable();
            $table->string('meter_bal', 50)->nullable();
            $table->string('pole_dist', 50)->nullable();
            $table->string('size', 50)->nullable();
            $table->string('pole_no', 50)->nullable();
            $table->string('trans_no', 50)->nullable();
            $table->string('trans_rate', 50)->nullable();
            $table->string('lines_per_pole', 50)->nullable();
            $table->string('no_of_poles', 50)->nullable();
            $table->string('line_condition', 50)->nullable();
            $table->string('damage_length', 50)->nullable();
            $table->string('gmt', 50)->nullable();
            $table->string('pmt', 50)->nullable();
            $table->string('cwa', 50)->nullable();
            $table->string('height', 50)->nullable();
            $table->string('pole_condition', 50)->nullable();
            $table->string('meter_phase_inst', 50)->nullable();

            $table->string('rate_to_install', 50)->nullable();
            $table->string('extra_cable_needed', 50)->nullable();
            $table->string('date_of_visit', 50)->nullable();
            $table->string('inspected_by', 50)->nullable();

            $table->string('approved_status', 50)->nullable();
            $table->string('no_reason', 50)->nullable();
            $table->string('date_approved', 50)->nullable();
            $table->string('auth_by', 50)->nullable();

            $table->string('status', 15)->default('no');
            $table->string('del', 5)->default('no');
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
        Schema::dropIfExists('generals');
    }
}
