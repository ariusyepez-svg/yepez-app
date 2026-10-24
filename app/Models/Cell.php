<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cell extends Model
{
    use HasFactory;

    protected $table = 'cells';
    
    // Al usar el estándar 'id', no hace falta especificar primaryKey.
    // Habilitamos la asignación masiva implícita según tu separata de SENATI:
    protected $guarded = [];
}
