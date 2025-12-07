<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable = ['nome','codigo','carga_horaria','curso_id'];

    
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
