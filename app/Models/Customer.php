<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;

    protected $table = 'customer';
    protected $primaryKey = 'id_customer'; 
    public $timestamps = false;

    protected $fillable = [
        'nama_customer',
        'username',
        'alamat',
        'nomor_telepon',
        'password',
        'nama_kota',
        'id_kota',
    ];

    protected $hidden = [
        'password',
    ];

    public function kota()
    {
        return $this->belongsTo(Kota::class, 'id_kota', 'id_kota');
    }
}
