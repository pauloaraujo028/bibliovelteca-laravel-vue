<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id('livro_id');
            $table->string('nome_livro');
            $table->timestamp('dt_inclusao')->default(now());
            $table->timestamp('dt_alteracao')->default(now());
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
