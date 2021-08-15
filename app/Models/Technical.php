<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technical extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'personal_id', 'meter_no', 'meter_rating', 'ph', 'meter_loc', 'credit_meter', 'prepaid_meter', 'type', 'meter_reading', 'meter_bal', 'pole_dist', 'size', 'pole_no', 'trans_no', 'trans_rate', 'lines_per_pole', 'no_of_poles', 'line_condition', 'damage_length', 'gmt', 'pmt', 'cwa', 'height', 'pole_condition', 'meter_phase_inst'];
    
    public function personal(){
        return $this->belongsTo('App\Models\Personal');
    }

}
