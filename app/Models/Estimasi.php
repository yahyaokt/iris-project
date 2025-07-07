<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimasi extends Model
{
    use HasFactory;

    protected $table = 'estimasi'; 
    protected $primaryKey = 'id_estimasi';

    protected $fillable = [
        'id_warehouse',
        'id_kota_tujuan',
        'estimasi hari',
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class, 'id_warehouse', 'id_warehouse');
    }

    public function kota()
    {
        return $this->belongsTo(Kota::class, 'id_kota_tujuan', 'id_kota');
    }
}
