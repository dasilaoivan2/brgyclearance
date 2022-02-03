<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = ['lastname', 'firstname', 'middlename', 'address', 'civilstatus', 'gender', 'citizenship', 'dateofbirth', 'placeofbirth'];

    public function clearances(){
        return $this->hasMany('App\Models\Clearance');
    }

    public function fullname(){

        return $this->firstname." ".$this->middlename[0].". ".$this->lastname;
    }
}
