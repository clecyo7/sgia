<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'diretor'];

    public function diretor(){
        return $this->belongsTo((User::class));
    }
}
