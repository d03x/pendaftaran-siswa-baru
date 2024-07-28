<?php

namespace Database\Seeders;

use App\Models\TahunAjaran;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TahunAjaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tahunAjaran = [
            [
                'nama' => '2023/2024',
                'tanggal_mulai' => Carbon::create(2023, 7, 1),
                'tanggal_selesai' => Carbon::create(2024, 6, 30),
                'aktif' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => '2024/2025',
                'tanggal_mulai' => Carbon::create(2024, 7, 1),
                'tanggal_selesai' => Carbon::create(2025, 6, 30),
                'aktif' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($tahunAjaran as $tahun) {
            TahunAjaran::firstOrCreate($tahun);
        }
    }
}
