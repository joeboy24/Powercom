<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'customer_no', 'name', 'address', 'contact', 'business', 'comp_hse', 'proj_cust', 'est_sensor', 'email', 'dig_address', 'coords'];
    
    public function customer(){
        return $this->belongsTo('App\Models\Customer');
    }

    public function remarks(){
        return $this->belongsTo('App\Models\Remarks');
    }

    public function technical(){
        return $this->belongsTo('App\Models\Technical');
    }

    public function reccomendation(){
        return $this->belongsTo('App\Models\Reccomendtion');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    
}
