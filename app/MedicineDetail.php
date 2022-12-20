<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineDetail extends Model
{

    protected $fillable = [
        'category',
        'description',
        'expiration_date',
        'medicine_id'
    ];

    //Indicar que le pertenece a un usuario
    public function medicines()
    {
        return $this->belongsTo(Medicine::class, 'medicine_id');
    }

}
