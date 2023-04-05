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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->unsignedBigInteger('usuario_crea');
            $table->unsignedBigInteger('usuario_mod');
            $table->string('activo',1);
            $table->timestamps();
            $table->foreign('usuario_crea')->references('id')->on('users');
            $table->foreign('usuario_mod')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
