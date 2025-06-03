<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommitmentForm extends Model
{
    protected $table = "ficha_compromisos";

    protected $fillable = [
        'oid',
        'numero_compromiso',
        'nombre_compromiso',
        'nombre_dependencia',
        'siglas_dependencia',
        'inter_dependencias',
        'presupuesto_total',
        'presupuesto_adicional',
        'status_compromiso',
    ];
}
