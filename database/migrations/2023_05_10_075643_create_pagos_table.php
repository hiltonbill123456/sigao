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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('id_pago');
            $table->string('asunto');

            $table->unsignedBigInteger('id_tramitante');
            $table->foreign('id_tramitante')->references('id_entidad')->on('entidades');

            $table->unsignedBigInteger('id_vehiculo');
            $table->foreign('id_vehiculo')->references('id_vehiculo')->on('vehiculos');

            $table->date('fecha');
            $table->string('orden_internamiento');
            $table->integer('numero_dias');
            $table->decimal('costo_tramite');
            $table->decimal('costo_guardiania');
            $table->decimal('descuento');
            $table->decimal('tasa_descuento');
            $table->decimal('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
