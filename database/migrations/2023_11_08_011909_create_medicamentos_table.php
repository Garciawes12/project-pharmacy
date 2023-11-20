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
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string('imagen');
            $table->string('nombre');
            $table->string('codigo')->nullable()->default(null);// Código del Medicamento
            $table->text('categoria'); // Descripción
            $table->string('unidad_medida'); // Unidad de Medida
            $table->integer('cantidad_stock'); // Cantidad en Stock
            $table->date('fecha_caducidad'); // Fecha de Caducidad
            $table->decimal('precio_compra', 8, 2);
            $table->decimal('precio_venta', 8, 2);
            $table->decimal('precio_venta_unidad', 8, 2);
            $table->string('proveedor')->foreign('proveedor_id')->references('id')->on('proveedores'); // Proveedor
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamentos');
    }
};
