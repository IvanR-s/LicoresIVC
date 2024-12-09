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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("Documento");
            $table->string("Nombre",80);
            $table->string("Apellido",80);
            $table->bigInteger("Telefono",);
            $table->string("Password",128);
            $table->string("Correo",100);
            $table->enum('Rol', ['Administrador', 'Empleado']);
            $table->enum('Estado', ['Activo', 'Inactivo']);
            $table->enum('Tipo_documento', ['Cedula', 'Registro Civil', 'Cedula de Extranjera']);


            $table->timestamps(); 

        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};