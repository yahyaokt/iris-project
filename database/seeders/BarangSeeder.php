<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{

    public function run(): void
    {
        $barang = [
            [
                'id_barang' => 'BB001',
                'nama_barang' => 'Ajinomoto Umami Seasoning',
                'harga' => 50000,
                'deskripsi' => 'Bumbu untuk meningkatkan rasa umami pada masakan.',
            ],
            [
                'id_barang' => 'BB002',
                'nama_barang' => 'Ajinomoto Chicken Powder',
                'harga' => 70000,
                'deskripsi' => 'Bumbu rasa ayam dalam bentuk bubuk.',
            ],
            [
                'id_barang' => 'BB003',
                'nama_barang' => 'Ajinomoto MSG',
                'harga' => 40000,
                'deskripsi' => 'Monosodium glutamat untuk memasak.',
            ],
            [
                'id_barang' => 'BB004',
                'nama_barang' => 'Ajinomoto Garlic Powder',
                'harga' => 60000,
                'deskripsi' => 'Bumbu bubuk bawang putih.',
            ],
            [
                'id_barang' => 'BB005',
                'nama_barang' => 'Ajinomoto Soy Sauce',
                'harga' => 120000,
                'deskripsi' => 'Kecap untuk marinasi dan memasak.',
            ],
        ];

        DB::table('barang')->insert($barang);
    }
}