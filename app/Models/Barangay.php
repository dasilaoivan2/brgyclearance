<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'pbname',
        'verified_name',
        'verified_position',
        'logo',
    ];

    public function clearances(){
        return $this->hasMany('App\Models\Clearance');
    }

    public function users(){
        return $this->hasMany('App\Models\User');
    }

    public function barangaymembers(){
        return $this->hasMany('App\Models\Barangaymember');
    }


    
}
