<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    
    protected $fillable = [
        "name", 
        "vendorID",
        "cagtegory",
        "price",
        "description",
        "img",
    ];

    public function vendors(){

        return  $this->belongsTo(Vendors::class);
    }

}
