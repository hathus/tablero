<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compromise extends Model
{
    protected $table = "compromisos";
    
    protected $fillable = [
        'eje_numero',
        'eje_nombre',
    ];
}
