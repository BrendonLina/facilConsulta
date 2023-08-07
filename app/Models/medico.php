<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'nome',
        'especialidade',
        'cidade_id'

    ];

    public function cidades(){
        
        return $this->hasOne('App\Models\cidade');
    }

    public function pacientes(){
        
        return $this->belongsToMany('App\Models\paciente');
    }

    
}
