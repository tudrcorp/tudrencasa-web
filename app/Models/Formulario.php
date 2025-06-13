<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table = 'formularios';

    protected $fillable = [
        'plan',
        'destino',
        'fecha_salida',
        'fecha_retorno',
        'adultos',
        'menores',
        'mayores',
        'nombre_completo',
        'email',
    ];

    // protected $casts = [
    //     'fecha_salida' => 'datetime',
    //     'fecha_retorno' => 'datetime',
    // ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}