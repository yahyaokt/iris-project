<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaSeeder extends Seeder
{
    public function run(): void
    {
        $kotaJatim = [
            'Surabaya',
            'Malang',
            'Kediri',
            'Blitar',
            'Pasuruan',
            'Probolinggo',
            'Batu',
            'Madiun',
            'Mojokerto',
            'Jember',
            'Lumajang',
            'Bondowoso',
            'Situbondo',
            'Banyuwangi',
            'Sidoarjo',
            'Ngawi',
            'Magetan',
            'Tulungagung',
            'Trenggalek',
            'Ponorogo',
        ];

        foreach ($kotaJatim as $index => $namaKota) {
            DB::table('kota')->insert([
                'id_kota' => $index + 1,
                'nama_kota' => $namaKota,
            ]);
        }
    }
}