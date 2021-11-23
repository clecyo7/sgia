<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reuniao extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['name','departamento', 'data', 'local','horario'];
}


