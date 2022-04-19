<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelangganModel extends Model
{
    use HasFactory;
    protected $table = 'public.pelanggan';
    protected $fillable = [
        'kode_pelanggan',
        'nama',
        'email',
        'telp',
        'alamat'
    ];
}
