<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_barangs')->insert([[
            'kode' => '1',
            'jenis' => 'Bagian pertama dari series Bumi'
        ],
        [
            'kode' => '2',
            'jenis' => 'Bagian kedua dari series Bumi'
        ],
        [
            'kode' => '3',
            'jenis' => 'Bagian ketiga dari series Bumi'
        ]
        ]);
    }
}
