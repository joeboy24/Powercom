<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'customer_no', 'name', 'address', 'contact', 'business', 'comp_hse', 'proj_cust', 
    'est_sensor', 'email', 'dig_address', 'coords', 'acc_no', 'spn', 'geocode', 'structure_id', 'service_type',
    'meter_no', 'meter_rating', 'ph', 'meter_loc', 'credit_meter', 'prepaid_meter', 'type', 'meter_reading', 
    'meter_bal', 'pole_dist', 'size', 'pole_no', 'trans_no', 'trans_rate', 'lines_per_pole', 'no_of_poles', 
    'line_condition', 'damage_length', 'gmt', 'pmt', 'cwa', 'height', 'pole_condition', 'meter_phase_inst',
    'personal_id',
    'rate_to_install',
    'extra_cable_needed',
    'date_of_visit',
    'inspected_by',
    'approved_status',
    'no_reason',
    'date_approved',
    'auth_by',
];
    
}
