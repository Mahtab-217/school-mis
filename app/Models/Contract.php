<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    //
    protected $fillable = [
        "designation_id",
        "hire_type",
        "start_date",
        "end_date",
        "employee_id"
    ];
    public function designations(){
        return $this->belongsTo(Designation::class);
    }
    public function employees(){
        return $this->belongsTo(Employee::class);
    }
    
}
