<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adhesion extends Model
{
    protected $fillable = ['razon_social',
    	    'IVA',
            'cuit',
            'responsable',
            'cargo',
            'domicilio',
            'telefono',
            'email',
            'web',
            'cantidad_sillones',
            'recomendado_por'
            ];
}
