<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    /**
     * La tabla asociada con el modelo.
     *
     * @var string
     */
    protected $table = 'usuarios';

    /**
     * Los atributos que se pueden asignar masivamente.
     *
     * @var array
     */
    protected $fillable = [
        'Documento',
        'Nombre',
        'Apellido',
        'Telefono',
        'Password',
        'Correo',
        'Rol',
        'Estado',
        'Tipo_documento',
    ];

    /**
     * Los atributos que deben estar ocultos para los arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Password',
    ];

    /**
     * Configuración para el casting de atributos.
     *
     * @var array
     */
    protected $casts = [
        'Documento' => 'integer',
        'Telefono' => 'integer',
        'Rol' => 'string',
        'Estado' => 'string',
        'Tipo_documento' => 'string',
    ];
}
