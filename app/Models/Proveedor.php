<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla (opcional si sigue la convención pluralizada).
    protected $table = 'proveedores';

    // Define los campos que pueden ser asignados masivamente.
    protected $fillable = [
        'documento',
        'nombre',
        'telefono',
        'direccion',
        'correo',
        'estado'
    ];

    // Relación: Un proveedor puede tener muchas compras
    public function compras()
    {
        return $this->hasMany(Compra::class, 'proveedor_id');
    }
}
