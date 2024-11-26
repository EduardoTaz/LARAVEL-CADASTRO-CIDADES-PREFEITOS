<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prefeitos', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("idade");
            $table->string("partido");
            $table->date("mandato_inicio");
            $table->date("mandato_fim");
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('prefeitos');
    }
};
