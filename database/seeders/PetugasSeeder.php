<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        $petugass = [
            [
                'id_petugas' => 1,
                'username' => 'nunez',
                'nama_petugas' => 'David Nunez',
                'id_warehouse' => 1,
                'password' => Hash::make('nunez123'),
            ],
            [
                'id_petugas' => 2,
                'username' => 'marhor',
                'nama_petugas' => 'Markus Horizon',
                'id_warehouse' => 2,
                'password' => Hash::make('marhor123'),
            ],
            [
                'id_petugas' => 3,
                'username' => 'jude',
                'nama_petugas' => 'Jude bellingham',
                'id_warehouse' => 3,
                'password' => Hash::make('jude123'),
            ],
        ];

        DB::table('petugas')->insert($petugass);
    }
}
