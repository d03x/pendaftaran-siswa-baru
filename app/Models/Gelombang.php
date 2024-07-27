<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gelombang extends Model
{
    use HasUuids;
    use HasFactory;
    protected $fillable = [
        'tahun_ajaran_id',
        'kuota',
        'nama',
        'boleh_mendaftar_lagi',
        'dibuka'
    ];
    protected function casts()
    {
        return ['dibuka' => 'boolean'];
    }
    public function tahunAjaran()
    {
        return $this->belongsTo(TahunAjaran::class);
    }
}
