<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigInteger("id");
            $table->string("Codigo",100);
            $table->string("Nombre",200);
            $table->integer("Stock");
            $table->string("lote",45);
            $table->date("Fecha_vencimiento");
            $table->integer("Marca");
            $table->integer("Unidad_medida");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
