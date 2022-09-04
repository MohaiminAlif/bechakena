<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendors extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'city',
        'zip',
        'trade_licence',
        'nid',
        'verified_at',
    ];

    public function products(){
        return $this->hasMany(Products::class);
    }
}


