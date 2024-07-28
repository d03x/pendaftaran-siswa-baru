<?php

namespace App\Models;

use App\Enums\Enums\StatusSekolah;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SekolahAsal extends Model
{
    use HasUuids;
    use HasFactory;
    protected $fillable = [
        'npsn',
        'nama',
        'alamat',
        'status',
    ];
    protected function casts()
    {
        return [
            'status' => StatusSekolah::class
        ];
    }
}
