<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    use HasFactory;
    protected $fillable = ['id_petugas', 'nama_petugas', 'username', 'password', 'telp', 'level'];
    public $timestamps = false;
}
