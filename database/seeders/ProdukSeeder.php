<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('produks')->insert([
            [
                'nama_varian' => 'Waiteu Delima',
                'deskripsi' => 'Mengandung buah delima, ganggang merah, dan L-Glutathione. Cocok untuk pencerahan bertahap.',
                'harga' => 75000,
                'gambar' => 'delima.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_varian' => 'Waiteu Walet',
                'deskripsi' => 'Mengandung sarang burung walet, bunga telang, dan biji anggur. Untuk hasil cepat dan perawatan intensif.',
                'harga' => 85000,
                'gambar' => 'walet.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
