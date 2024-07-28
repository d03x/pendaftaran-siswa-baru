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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nomor_pendaftaran')->unique();
            $table->uuid('siswa_id');
            $table->uuid('formulir_id');
            $table->uuid('gelombang_id');
            $table->enum('status', ['dicadangkan', 'ditolak', 'diterima', 'pending'])->default('pending');
            $table->timestamps();
            $table->foreign('siswa_id')->references('id')->on('siswas')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('formulir_id')->references('id')->on('formulirs')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('gelombang_id')->references('id')->on('gelombangs')->cascadeOnUpdate()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
