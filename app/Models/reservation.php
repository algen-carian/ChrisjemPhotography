<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        "fname",
    	"mname",
    	"lname",
    	"email",
    	"Address",
    	"contact",
    	"alternate",
    	"Event_date",
    	"created_at",
    	"updated_at"
    ];
}
