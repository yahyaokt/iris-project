<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class WarehouseSeeder extends Seeder
{
    public function run(): void
    {
        $warehouses = [
            [
                'id_warehouse' => 1,
                'username' => 'gudang_sby',
                'nama_warehouse' => 'Warehouse Surabaya',
                'alamat' => 'Jl. Ahmad Yani No. 88',
                'nama_kota' => 'Surabaya',
                'password' => Hash::make('adm123'),
                'quantity' => 120,
            ],
            [
                'id_warehouse' => 2,
                'username' => 'gudang_mlg',
                'nama_warehouse' => 'Warehouse Malang',
                'alamat' => 'Jl. Ijen No. 45',
                'nama_kota' => 'Malang',
                'password' => Hash::make('adm123'),
                'quantity' => 90,
            ],
            [
                'id_warehouse' => 3,
                'username' => 'gudang_kdr',
                'nama_warehouse' => 'Warehouse Kediri',
                'alamat' => 'Jl. Veteran No. 12',
                'nama_kota' => 'Kediri',
                'password' => Hash::make('adm123'),
                'quantity' => 70,
            ],
        ];

        DB::table('warehouse')->insert($warehouses);
    }
}
