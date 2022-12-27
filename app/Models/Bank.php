<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $table = 'bank';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = "nomor_rekening";
    protected $fillable = [
        'nomor_rekening',
        'nama_bank'
    ];
}
