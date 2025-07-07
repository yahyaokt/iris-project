<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Warehouse extends Authenticatable
{
    use HasFactory;

    protected $table = 'warehouse';
    protected $primaryKey = 'id_warehouse'; 

    protected $fillable = [
        'nama_warehouse',
        'username',
        'alamat',
        'nama_kota',
        'quantity',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
