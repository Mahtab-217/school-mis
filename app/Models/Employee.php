<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = [
        "firstName",
        "lastName",
        "tazkira",
        "email",
        "phone",
        "gender",
        "designation_id"
    ];
}
