<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan konvensi penamaan
    protected $table = 'bukus';

    // Tentukan kolom yang dapat diisi massal
    protected $fillable = [
        'judul',
        'penulis',
        'tahun_terbit',
        'harga',
        'stok'
    ];
}
