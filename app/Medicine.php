<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    

    protected $fillable = [
        'name',
        'price',
        'image'
    ];

    

}
