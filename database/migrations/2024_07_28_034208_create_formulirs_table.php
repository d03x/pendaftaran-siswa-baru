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
        Schema::create('formulirs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('siswa_id')->constrained('siswas')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignUuid('jurusan_id')->constrained('jurusans')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('nik', 16)->unique();
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('no_kk', 16);
            $table->string('agama');
            $table->string('jumlah_saudara');
            $table->integer('anak_ke');
            $table->string('hobi');
            $table->string('cita_cita');
            //pendidikan sebelumnya
            $table->foreignUuid("sekolah_asal_id")->constrained('sekolah_asals')->cascadeOnUpdate()->restrictOnDelete();
            //data ayah
            $table->string('nama_ayah');
            $table->enum('status_ayah', ['Hidup', 'Meninggal']);
            $table->string('nik_ayah');
            $table->string('tempat_lahir_ayah');
            $table->date('tgl_lahir_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->integer('penghasilan_ayah');
            $table->string('no_hp_ayah');

            // Mother Data
            $table->string('nama_ibu');
            $table->enum('status_ibu', ['Hidup', 'Meninggal']);
            $table->string('nik_ibu');
            $table->string('tempat_lahir_ibu');
            $table->date('tgl_lahir_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->integer('penghasilan_ibu');
            $table->string('no_hp_ibu');

            // data wali
            $table->string('nama_wali')->nullable();
            $table->string('nik_wali')->nullable();
            $table->string('tempat_lahir_wali')->nullable();
            $table->date('tgl_lahir_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->integer('penghasilan_wali')->nullable();
            $table->string('no_hp_wali')->nullable();

            // status siswa dan alamat
            $table->enum('status_rumah', ['Sendiri', 'Nenek', 'Kakak', 'Saudara', 'Sewa/Kontrak']);
            $table->enum('tinggal_sama', ['Ortu', 'Wali', 'Saudara', 'Panti']);
            $table->text('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('kel');
            $table->string('kec');
            $table->string('kab_kota');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->string('tinggal_dengan')->nullable();
            //status formulir
            $table->boolean('diverifikasi')->default(false);
            $table->timestamps();
            $table->index(['nik','no_kk']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulirs');
    }
};
