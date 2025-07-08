<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorageSeeder extends Seeder
{
    public function run(): void
    {
        $warehouses = [1, 2, 3]; 
        $barangs = ['BB001', 'BB002', 'BB003', 'BB004', 'BB005']; 

        foreach ($warehouses as $warehouseId) {
            foreach ($barangs as $barangId) {
                DB::table('storage')->insert([
                    'id_warehouse' => $warehouseId,
                    'id_barang' => $barangId,
                    'quantity' => 200,
                ]);
            }
        }
    }
}
