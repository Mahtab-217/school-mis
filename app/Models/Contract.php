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
}
