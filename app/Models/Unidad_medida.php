<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model
{
    use HasFactory;

    /**

     *
     * @var string
     */
    protected $table = 'unidad_medidas';

    /**

     *
     * @var array
     */
    protected $fillable = [
        'Ruta',
        'Estado',
    ];

    /**

     *
     * @var array
     */
    protected $casts = [
        'Ruta' => 'string',
        'Estado' => 'string',
    ];
}
