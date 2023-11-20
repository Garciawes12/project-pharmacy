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
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('proveedor');
            $table->string('tipo_comprobante');
            $table->string('serie_comprobante')->nullable();
            $table->string('numero_comprobante')->nullable();
            $table->float('impuesto')->nullable();
            $table->string('medicamento');
            $table->string('Cantidad');
            $table->float('precio_compra');
            $table->float('precio_venta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingresos');
    }
};
