<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use function Pest\Laravel\session;

class Department extends Model
{
    //
    protected $fillable = [
        "name",
        "school_id",
    ];
    public function designations(){
        return $this->hasMany(Designation::class);
    }
    // public function department(){
    //     return $this->belongsTo(School::class);
    // }
    public function school(){
        return $this->belongsTo(School::class);
    }
    public function employees(){
        return $this->hasManyThrough(Employee::class, Designation::class);
    }
    // public function scopeInSchool($query){
    //     return $query->where("school_id",session("school_id"));
    // }
}
