<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table='alunos';
    protected $fillable=[
        'ra',
        'nome',
        'turmas_id'
    ];
    public function turma()
    {
        return $this->hasOne('App\Turma', 'id', 'turmas_id');
    }
}
