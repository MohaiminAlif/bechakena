<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sizes extends Model
{
    use HasFactory;

    protected $fillable = [
        "size", 
        "units",
        "img_1", 
        "img_2", 
        "img_3"
    ];
}
