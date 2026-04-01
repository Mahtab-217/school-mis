<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = [
        "name",
        "school_id",
    ];
    public function designations(){
        return $this->hasMany("Designation::class");
    }
    public function department(){
        return $this->belongsTo(School::class);
    }
}
