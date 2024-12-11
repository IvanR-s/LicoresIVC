<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $table = 'fotos';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Ruta',
        'producto_id', // Clave foránea
    ];

    protected $casts = [
        'Descripcion' => 'string',
    ];

    // Relación: Una Foto pertenece a un Producto
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id', 'id');
    }
}
