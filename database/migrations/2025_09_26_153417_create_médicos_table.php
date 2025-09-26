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
        Schema::create('médicos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo',100);
            $table->string('especialidade',80);
            $table->date('data_nascimento');
            $table->string('registro_profissional',100);
            $table->string('cpf');
            $table->string('email',100);
            $table->string('telefone');
            $table->string('horario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('médicos');
    }
};
