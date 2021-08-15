<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remarks extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'personal_id',
        'approved_status',
        'no_reason',
        'date_approved',
        'auth_by',
    ];

    public function personal(){
        return $this->belongsTo('App\Models\Personal');
    }

}
