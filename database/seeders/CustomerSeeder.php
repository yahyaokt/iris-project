<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{

    public function run(): void
    {
        $customers = [
            [
                'id_customer' => 1,
                'username' => 'reha22',
                'nama_customer' => 'Renaldi Hehanusa',
                'alamat' => 'Jl. Ahmad Yani No. 88',
                'nama_kota' => 'Surabaya',
                'id_kota' => 1,
                'password' => Hash::make('reha22123'),
                'nomor_telepon' => '021834901278',
            ],
            [
                'id_customer' => 2,
                'username' => 'psita22',
                'nama_customer' => 'Paulo Sitanggang',
                'alamat' => 'Jl. Ahmad Yani No. 88',
                'nama_kota' => 'Surabaya',
                'id_kota' => 1,
                'password' => Hash::make('psita22123'),
                'nomor_telepon' => '021834901278',
            ],
            [
                'id_customer' => 3,
                'username' => 'bosboaz',
                'nama_customer' => 'Boaz Solosa',
                'alamat' => 'Jl. Ahmad Yani No. 88',
                'nama_kota' => 'Surabaya',
                'id_kota' => 1,
                'password' => Hash::make('bosboaz123'),
                'nomor_telepon' => '021834901278',
            ],
        ];

        DB::table('customer')->insert($customers);
    }
}
