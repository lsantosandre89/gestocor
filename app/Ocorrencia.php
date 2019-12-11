<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{
    protected $table = 'ocorrencias';
    protected $fillable = [
        'alunos_id',
        'materias_id',
        'tipos_id',
        'users_id',
        'descricao',
        'data'
    ];
    public function aluno()
    {
        return $this->hasOne('App\Aluno', 'id', 'alunos_id');
    }
    public function materia()
    {
        return $this->hasOne('App\Materia', 'id', 'materias_id');
    }
    public function tipo()
    {
        return $this->hasOne('App\TipoOcorrencia', 'id', 'tipos_id');
    }
    public function usuario()
    {
        return $this->hasOne('App\Usuario', 'id', 'users_id');
    }
}
