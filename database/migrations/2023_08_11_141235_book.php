<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->text('description');
            $table->integer('published_year'); // Ano de publicação
            $table->string('isbn'); // Número ISBN do livro
            $table->string('cover_image'); // Nome da foto de capa do livro
            $table->timestamps();
            $table->softDeletes(); // Adicionando a coluna deleted_at
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};
