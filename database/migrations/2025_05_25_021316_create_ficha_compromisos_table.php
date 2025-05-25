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
        Schema::create('ficha_compromisos', function (Blueprint $table) {
            $table->id();
            $table->string('oid');
            $table->integer('numero_compromiso');
            $table->string('nombre_compromiso');
            $table->string('nombre_dependencia');
            $table->string('siglas_dependencia');
            $table->string('inter_dependencias');
            $table->integer('presupuesto_total');
            $table->integer('presupuesto_adicional');
            $table->string('status_compromiso');
            $table->foreignId('compromiso_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ficha_compromisos');
    }
};
