<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cidade extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'nome',
        'estado'
    ];

    public function medicos(){
        
        return $this->hasOne('App\Models\medico');
    }
}
