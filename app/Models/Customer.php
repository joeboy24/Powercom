<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'personal_id', 'acc_no', 'spn', 'geocode', 'structure_id', 'service_type'];

    public function personal(){
        return $this->belongsTo('App\Models\Personal');
    }

}
