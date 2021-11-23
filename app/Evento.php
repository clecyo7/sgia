<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    public $timestamps = false;
    protected $table = 'eventos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'descricao', 'data', 'local','horario'
    ];

}
