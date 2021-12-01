<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{

    protected $fillable = ['reuniao', 'usuarios'];

    public function reuniao(){
        return $this->hasMany((Reuniao::class));
    }

    public function usuario(){
        return $this->hasMany((User::class));
    }
}
