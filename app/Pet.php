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
        'id_user'
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


}
