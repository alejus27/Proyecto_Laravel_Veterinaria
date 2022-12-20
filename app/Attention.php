<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attention extends Model
{
   

    protected $fillable = [
        'date_attention',
        'description',
        'id_veterinary',
        'id_pet'

    ];


}
