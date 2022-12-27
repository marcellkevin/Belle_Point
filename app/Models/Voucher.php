<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    protected $table = 'voucher';
    public $timestamps = true;
    public $incrementing = false;
    protected $primaryKey = "id_voucher";
    protected $fillable = [
        'id_voucher',
        'nama_voucher',
        'nilai_voucher',
        'masa_berlaku',
        'created_at',
        'foto'
    ];
}
