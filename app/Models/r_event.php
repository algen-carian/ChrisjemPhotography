<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class r_event extends Model
{
    use HasFactory;
    protected $fillable = [
        "reservation_id",	
        "Type",
        "Service"	
    ];
}
