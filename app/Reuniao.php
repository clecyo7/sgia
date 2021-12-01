<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reuniao extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'data', 'local','horario', 'departamentoReu'];


    public function departamentos(){
        return $this->hasMany(Departamento::class);
    }
}


