<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    use HasUuids;
    use HasFactory;
    protected $fillable = [
        'tanggal_mulai',
        'tangal_selesai',
        'nama',
        'aktif'
    ];
    protected function casts()
    {
        return ['aktif' => 'boolean'];
    }

    public function scopeAktif($query) {
        return $query->whereAktif(true)->first();
    }
    public function gelombang(){
        return $this->hasMany(Gelombang::class);
    }
}
