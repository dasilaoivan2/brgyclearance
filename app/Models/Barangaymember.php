<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangaymember extends Model
{
    use HasFactory;

    protected $fillable = [
        'barangay_id',
        'name',
        'position',
        'designation',
        'order_no',
    ];

    public function barangay()
    {
        return $this->belongsTo('App\Models\Barangay');
    }
    
}
