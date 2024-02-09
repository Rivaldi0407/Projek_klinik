<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Memasukkan data dummy ke tabel 'pasien'
        DB::table('pasiens')->insert([
            [
                'kode_pasien'       => 'PASIEN0001',
                'nama_pasien'       => 'Pasien 1',
                'jenis_kelamin'     => 'Laki-laki',
                'status'            => 'Menikah',
                'alamat'            => 'Alamat Pasien 1',
                'created_at'        => now(),
            ],
            [
                'kode_pasien'       => 'PASIEN0002',
                'nama_pasien'       => 'Pasien 2',
                'jenis_kelamin'     => 'Perempuan',
                'status'            => 'Menikah',
                'alamat'            => 'Alamat Pasien 2',
                'created_at'        => now(),
            ],
            // Tambahkan data pasien lainnya sesuai kebutuhan
        ]);
    }
}
