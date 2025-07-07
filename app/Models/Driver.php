<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Driver extends Authenticatable
{
    use HasFactory;

    protected $table = 'driver'; 
    protected $primaryKey = 'id_driver';

    protected $fillable = [
        'nama_driver',
        'username',
        'quantity',
        'password',
        'id_warehouse',
    ];

    protected $hidden = [
        'password',
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class, 'id_warehouse', 'id_warehouse');
    }
}
