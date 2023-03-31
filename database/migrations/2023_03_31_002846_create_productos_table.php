<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_categoria');
            $table->string('sku');
            $table->string('nombre');
            $table->longText('descripcion');
            $table->decimal('precio', $precision = 10, $scale = 2);
            $table->integer('cantidad');
            $table->enum('estado', ['CON INVENTARIO', 'SIN INVENTARIO']);
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
