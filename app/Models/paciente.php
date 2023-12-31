<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'nome',
        'cpf',
        'celular'
    ];

    public function medicos(){
        
        return $this->belongsToMany('App\Models\medico');
    }

}
