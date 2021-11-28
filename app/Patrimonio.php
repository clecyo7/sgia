<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patrimonio extends Model
{
    public $timestamps = false;
    protected $table = 'patrimonios';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'marca', 'valor', 'quantidade','nrPatrimonio','dtAquisicao', 'image'
    ];

    protected  $guarded = [];


    
}
