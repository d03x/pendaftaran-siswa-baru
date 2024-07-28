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
        Schema::create('sekolah_asals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('npsn')->unique();
            $table->string('nama');
            $table->longText('alamat');
            $table->enum('status',['N','S']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolah_asals');
    }
};
