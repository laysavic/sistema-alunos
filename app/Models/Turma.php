<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $fillable = [ 'nome','semestre','curso_id','disciplinas_id'];

      public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class, 'disciplinas_id');
    }
}
