<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesananSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pesanan')->insert([
            'no_pesanan' => 'NP001',
            'tanggal_pesanan' => '2021-07-14',
            'nama_supplier' => 'PT. ABC',
            'nama_product' => 'Buku Tulis',
            'total' => '100'
        ]);
    }
}
