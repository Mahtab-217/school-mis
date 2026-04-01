<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $filable=[
        "name",
        "whatsapp-link",
        "facebook-link"
    ];
    
}
