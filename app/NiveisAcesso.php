<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NiveisAcesso extends Model
{
    protected $table = 'niveisacesso';
    protected $fillable = [
        'nome',
    ];
}
