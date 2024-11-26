<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('cidades', function (Blueprint $table) {
            $table->id();
            $table->string("cidade");
            $table->string("estado");
            $table->float("populacao");
            $table->date("data_fundacao");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cidades');
    }
};
