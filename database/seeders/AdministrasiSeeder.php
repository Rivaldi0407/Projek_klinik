<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdministrasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrasis')->insert([
            [
                'kode_administrasi' => 'ADM001',
                'tanggal'           => now(),
                'pasien_id'         => 1, // Ganti dengan ID pasien yang sesuai
                'dokter_id'         => 1, // Ganti dengan ID dokter yang sesuai
                'biaya'             => 500000,
                'created_at'        => now(),
            ],
            [
                'kode_administrasi' => 'ADM002',
                'tanggal'           => now(),
                'pasien_id'         => 2, // Ganti dengan ID pasien yang sesuai
                'dokter_id'         => 2, // Ganti dengan ID dokter yang sesuai
                'biaya'             => 700000,
                'created_at'        => now(),
            ],
            // Tambahkan data administrasi lainnya sesuai kebutuhan
        ]);
    }
}
