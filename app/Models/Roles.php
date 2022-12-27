<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $table = 'role';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = "id_role";
    protected $fillable = [
        'id_role',
        'nama_role'
    ];
}
