<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([[
            'Kode_jenis_barang' => '1',
            'nama' => 'Novel Bumi',
            'deskripsi_detail' => 'Novel ini mengisahkan tentang petualangan 3 remaja yang berusia 15 tahun bernama Raib, Ali dan Seli. Namun mereka bukanlah remaja biasa, melainkan remaja yang memiliki kekuatan khusus seperti Raib yang bisa menghilang, Seli yang bisa mengeluarkan petir dan Ali seorang pelajar yang sangat jenius.',
            'stock' => '4',
            'foto' => 'img1.jpg',
            'harga' => 'Rp. 65.000'
        ],
        [
            'Kode_jenis_barang' => '2',
            'nama' => 'Novel Bulan',
            'deskripsi_detail' => 'Masih menceritakan petualangan dari tiga sekawan, pada novel Bulan ini dikisahkan Ali, Seli, dan Raib yang dibawa oleh Miss Selena dan Av untuk melakukan diplomasi di Klan Matahari. Tujuannya adalah untuk membuka portal atau gerbang yang sudah ribuan tahun lamanya ditutup.',
            'stock' => '2',
            'foto' => 'img2.jpg',
            'harga' => 'Rp. 75.000'
        ],
        [
            'Kode_jenis_barang' => '3',
            'nama' => 'Novel Matahari',
            'deskripsi_detail' => 'Cerita ini dibuka dengan suasana duka yang menyelimuti Raib, Seli, dan Ali atas tewasnya Ily saat pertarungan di klan Matahari (di novel sebelumnya). Para ksatria dari klan Bulan pun turut merasakan yang sama, hingga membuat Miss Selena tak dapat pulang ke klan Bumi.',
            'stock' => '3',
            'foto' => 'img3.jpg',
            'harga' => 'Rp. 70.000'
        ]
        ]);
    }
}
