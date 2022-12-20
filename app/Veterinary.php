<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Pet;

class Veterinary extends Model
{

    protected $fillable = [
        'name',
        'phone',
        'address'
    ];

    public function pets()
    {
        return $this->belongsToMany(Pet::class);
    }
}
