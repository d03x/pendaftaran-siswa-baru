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
        Schema::create('gelombangs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string("nama");
            $table->foreignUuid('tahun_ajaran_id')->constrained('tahun_ajarans')->cascadeOnUpdate()->restrictOnDelete();
            $table->integer('kuota')->default(0);
            $table->boolean('boleh_mendaftar_lagi')->default(false);
            $table->boolean('dibuka')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gelombangs');
    }
};
