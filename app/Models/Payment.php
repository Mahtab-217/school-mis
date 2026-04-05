<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
        "payment_method",
        "employee_id",
        "payroll_id"
    ];
    public function employee(){
        return $this->belongsTo(Employee::class);

    }

    public function payroll(){
        return $this->belongsTo(Payroll::class);
    }
}
