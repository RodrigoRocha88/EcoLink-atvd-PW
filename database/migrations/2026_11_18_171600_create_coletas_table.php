<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('coletas', function (Blueprint $table) {
            $table->id();
            $table->string('material');
            $table->string('categoria');
            $table->decimal('peso_kg', 8, 2);
            $table->string('condominio');
            $table->string('ponto_coleta');
            $table->date('data_coleta');
            $table->string('status')->default('Aguardando');
            $table->text('observacoes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coletas');
    }
};