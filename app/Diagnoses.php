<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnoses extends Model
{

    protected $fillable = [
        'signs', 'symptoms', 'findings','attention_id'
    ];

    //Indicar que le pertenece a un usuario
    public function attentions()
    {
        return $this->belongsTo(Attention::class, 'attention_id');
    }

}
