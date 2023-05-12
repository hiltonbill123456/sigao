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
        Schema::create('reportes', function (Blueprint $table) {
            
            $table->id('id_reporte');
            $table->date('fecha');
            $table->time('hora');
            $table->unsignedBigInteger('id_inspector');
            $table->foreign('id_inspector')->references('id_user')->on('users');
            $table->string('lugar');
            $table->date('placa');
            $table->string('tipo');
            $table->string('suptipo');
            $table->longText('detalles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};
