<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = "id_customer";
    protected $fillable = [
        'id_customer',
        'nomor_hp',
        'id_user',
        'nama_customer',
        'alamat_customer',
        'poin_customer',
        'kota'
    ];
}
