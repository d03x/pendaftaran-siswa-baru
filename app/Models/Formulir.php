<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{

    use HasUuids, HasFactory;
    protected $fillable = [
        'siswa_id',
        'nik',
        'tanggal_lahir',
        'tempat_lahir',
        'no_kk',
        'agama',
        'jumlah_saudara',
        'anak_ke',
        'hobi',
        'cita_cita',
        'sekolah_asal_id',
        'nama_ayah',
        'status_ayah',
        'nik_ayah',
        'tempat_lahir_ayah',
        'tgl_lahir_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'no_hp_ayah',
        'nama_ibu',
        'status_ibu',
        'nik_ibu',
        'tempat_lahir_ibu',
        'tgl_lahir_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'no_hp_ibu',
        'nama_wali',
        'nik_wali',
        'tempat_lahir_wali',
        'tgl_lahir_wali',
        'pendidikan_wali',
        'pekerjaan_wali',
        'penghasilan_wali',
        'no_hp_wali',
        'status_rumah',
        'tinggal_sama',
        'alamat',
        'rt',
        'rw',
        'kel',
        'kec',
        'kab_kota',
        'provinsi',
        'kode_pos',
        'tinggal_dengan',
        'diverifikasi',
    ];

    protected $casts = [
        'id' => 'string',
        'siswa_id' => 'string',
        'tanggal_lahir' => 'date',
        'tgl_lahir_ayah' => 'date',
        'tgl_lahir_ibu' => 'date',
        'tgl_lahir_wali' => 'date',
        'diverifikasi' => 'boolean',
    ];
}
