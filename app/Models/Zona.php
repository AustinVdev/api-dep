<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    protected $fillable = [
        'departamento',
        'municipio',
        'idZona',
        'zona',
        'descripcion',
    ];

    protected $table = 'zonas';

    protected $primaryKey = 'idZonaRoja';
}
