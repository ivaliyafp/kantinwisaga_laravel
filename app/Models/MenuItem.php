<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

    use HasFactory;

    protected $fillable = [
        'nama_makanan',
        'jenis_makanan',
        'harga_makanan',
        'jumlah_makanan',
        'stok',
        'gambar',
    ];
    protected $table = 'menuitems';
}
