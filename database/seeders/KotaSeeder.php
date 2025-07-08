<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaSeeder extends Seeder
{
    public function run(): void
    {
        $kotaJatim = [
            'surabaya',
            'malang',
            'kediri',
            'blitar',
            'pasuruan',
            'probolinggo',
            'batu',
            'madiun',
            'mojokerto',
            'jember',
            'lumajang',
            'bondowoso',
            'situbondo',
            'banyuwangi',
            'sidoarjo',
            'ngawi',
            'magetan',
            'tulungagung',
            'trenggalek',
            'ponorogo',
        ];

        foreach ($kotaJatim as $index => $namaKota) {
            DB::table('kota')->insert([
                'id_kota' => $index + 1,
                'nama_kota' => $namaKota,
            ]);
        }
    }
}