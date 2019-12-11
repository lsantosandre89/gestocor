<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoOcorrencia extends Model
{
    protected $table = 'tiposocorrencias';
    protected $fillable = [
        'descricao',
    ];
}
