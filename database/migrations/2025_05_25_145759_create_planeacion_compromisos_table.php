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
        Schema::create('planeacion_compromisos', function (Blueprint $table) {
            $table->id();
            $table->string('plan_estrategico');
            $table->string('plan_operativo');
            $table->string('plan_accion');
            $table->string('tipo_compromiso');
            $table->text('plan_seguimiento');
            $table->foreignId('ficha_compromiso_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planeacion_compromisos');
    }
};
