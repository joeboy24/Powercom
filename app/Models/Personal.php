<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'customer_no', 'name', 'address', 'contact', 'business', 'comp_hse', 'proj_cust', 'est_sensor', 'email', 'dig_address', 'coords'];
    
    public function customer(){
        return $this->hasMany('App\Models\Customer');
    }

    public function remarks(){
        return $this->hasMany('App\Models\Remarks');
    }

    public function technical(){
        return $this->hasMany('App\Models\Technical');
    }

    public function recc(){
        return $this->hasMany('App\Models\Reccomendation');
    }

    public function user(){
        return $this->hasMany('App\Models\User');
    }
    
}
