<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh data dummy dokter
        $data = [
            [
                'kode_dokter' => 'KD001',
                'nama_dokter' => 'Dr. John Doe',
                'spesialis_id' => 'Spesialis Umum',
                'nomor_hp' => '081234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_dokter' => 'KD002',
                'nama_dokter' => 'Dr. Jane Smith',
                'spesialis_id' => 'Spesialis Bedah',
                'nomor_hp' => '081234567891',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data dokter lainnya sesuai kebutuhan
        ];

        // Masukkan data ke tabel dokters
        DB::table('dokters')->insert($data);
    }
}
