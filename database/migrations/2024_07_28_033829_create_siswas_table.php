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
        Schema::create('siswas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nisn', 10)->unique();
            $table->string('no_whatsapp');
            $table->string('nama');
            $table->string('email');
            $table->enum('jenis_kelamin',['L','P']);
            $table->string('password');
            $table->boolean('aktif')->default(true);
            $table->string('foto')->nullable();
            $table->timestamps();
            $table->index(['nama','email','nisn']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
