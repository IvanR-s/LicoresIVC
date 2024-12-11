<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'bigInteger';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'Codigo',
        'Nombre',
        'Stock',
        'lote',
        'Fecha_vencimiento',
        'Marca',
        'Unidad_medida',
    ];

    protected $casts = [
        'Fecha_vencimiento' => 'date',
    ];

    // Relación: Un Producto tiene una Foto
    public function foto()
    {
        return $this->hasOne(Foto::class, 'producto_id', 'id');
    }
}

}
