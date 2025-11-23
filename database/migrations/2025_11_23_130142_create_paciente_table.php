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
        Schema::create('paciente', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cartao_sus');
            $table->float('peso');
            $table->float('altura');
            $table->date('data_nascimento');
            $table->date('data_ultima_mestruacao')->nullable();
            $table->boolean('primeira_gestacao');
            $table->boolean('gestacao_multipla');
            $table->boolean('reproducao_assistida');
            $table->boolean('perda_gestacional');
            $table->boolean('ambiente_estressante');
            $table->boolean('gestacao_planejada');
            $table->boolean('aceita_gravidez');
            $table->boolean('historico_psiquiatrico');
            $table->boolean('pre_eclampsia');
            $table->boolean('diabetes_mellitus');
            $table->boolean('hipertensao');
            $table->boolean('doenca_tiroide');
            $table->unsignedBigInteger('medico_id');
            $table->foreign('medico_id')->references('id')->on('medico');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paciente');
    }
};
