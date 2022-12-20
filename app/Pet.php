<?php


namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Pet extends Model
{
    //use HasFactory;

    protected $fillable = [
        'name',
        'sex',
        'age',
        'specie',
        'breed',
        'id_user',
        'id_vet',
        'image'
    ];

    //Relación 1 a n
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ClinicalHistory()
    {
        return $this->hasOne(ClinicalHistory::class);
    }

    //Relación 1 a n
    public function vet()
    {
        return $this->belongsTo(Veterinary::class);
    }


}
