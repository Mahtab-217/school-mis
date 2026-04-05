<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = [
        "firstName",
        "tazkira",
        "email",
        "designation_id"
    ];
    public function contracts(){
        return $this->hasMany(Contract::class);
    }
    public function Salaries(){
        return $this->hasMany(Salary::class);
    }
    public function Payments(){
        return $this->hasMany(Payment::class);
    }
}
