<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla (opcional si sigue la convención pluralizada).
    protected $table = 'marcas';

    // Define los campos que pueden ser asignados masivamente.
    protected $fillable = [
        'nombre',
        'color',
        'estado',
    ];

    // Relación: Una marca puede estar asociada a muchos productos
    public function productos()
    {
        return $this->hasMany(Producto::class, 'marca_id');
    }
}

