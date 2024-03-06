<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    protected $fillable = [
        'texto', 'numero', 'fecha', 'color', 'imagen',
    ];
}
