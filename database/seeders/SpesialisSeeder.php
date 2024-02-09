<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpesialisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spesialis')->insert([
            [
                'nama'  => 'Spesialis Umum',
                'created_at'    => now(),
            ],
            [
                'nama'  => 'Spesialis Bedah',
                'created_at'    => now(),
            ]
        ]);
    }
}
