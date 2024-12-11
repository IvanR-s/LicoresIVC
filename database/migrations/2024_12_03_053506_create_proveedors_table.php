<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('documento')->unique();
            $table->string('nombre', 30);
            $table->string('telefono', 13);
            $table->string('direccion', 400);
            $table->string('correo', 30)->unique();
            $table->enum('estado', ['activo', 'inactivo']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedors');
    }
};
