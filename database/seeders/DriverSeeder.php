<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DriverSeeder extends Seeder
{
    public function run(): void
    {
        $drivers = [
            [
                'id_driver' => 1,
                'username' => 'stlili',
                'nama_driver' => 'Stephano Lilipaly',
                'status' => 'Avaliable',
                'id_warehouse' => 1,
                'password' => Hash::make('stlili123'),
                'quantity' => 200,
            ],
            [
                'id_driver' => 2,
                'username' => 'bp20',
                'nama_driver' => 'Bambang Pamungkas',
                'status' => 'Avaliable',
                'id_warehouse' => 2,
                'password' => Hash::make('bp20123'),
                'quantity' => 200,
            ],
            [
                'id_driver' => 3,
                'username' => 'treaa',
                'nama_driver' => 'Trent Alexander',
                'status' => 'Unavaliable',
                'id_warehouse' => 3,
                'password' => Hash::make('treaa123'),
                'quantity' => 200,
            ],
        ];

        DB::table('driver')->insert($drivers);
    }
}
