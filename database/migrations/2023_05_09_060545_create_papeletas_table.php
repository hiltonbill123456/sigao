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
        Schema::create('papeletas', function (Blueprint $table) {
            $table->id('id_papeleta');
            $table->unsignedBigInteger('id_vehiculo');
            $table->foreign('id_vehiculo')->references('id_vehiculo')->on('vehiculos');
            $table->string('infraccion');
            $table->string('numero_papeleta');
            $table->string('imagen_papeleta');
            $table->string('orden_liberacion');
            $table->string('imagen_liberacion');
            $table->unsignedBigInteger('id_inspector');
            $table->foreign('id_inspector')->references('id_user')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('papeletas');
    }
};
