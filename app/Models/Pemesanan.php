<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan'; 

    protected $fillable = [
        'id_warehouse',
        'id_customer',
        'id_estimasi',
        'estimasi',
        'status',
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class, 'id_warehouse', 'id_warehouse');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }
    public function estimasi()
    {
        return $this->belongsTo(Estimasi::class, 'id_estimasi', 'id_estimasi');
    }
}
