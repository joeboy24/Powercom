<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reccomendation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'personal_id',
        'rate_to_install',
        'extra_cable_needed',
        'date_of_visit',
        'inspected_by',
    ];

    public function personal(){
        return $this->belongsTo('App\Models\Personal');
    }

}
