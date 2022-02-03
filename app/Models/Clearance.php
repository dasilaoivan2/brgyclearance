<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clearance extends Model
{
    use HasFactory;

    protected $fillable = ['person_id', 'or', 'or_date', 'ctc_no', 'ctc_issued', 'ctc_place_issued', 'purpose', 'barangay_id', 'photo'];


    public function person(){
        return $this->belongsTo('App\Models\Person');
    }

    public function barangay(){
        return $this->belongsTo('App\Models\Barangay');
    }
}
