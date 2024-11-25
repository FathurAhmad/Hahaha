<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan konvensi penamaan
    protected $table = 'detail_pesanans';

    // Tentukan kolom yang dapat diisi massal
    protected $fillable = [
        'pesanan_id',
        'buku_id',
        'kuantitas',
        'harga_per_satuan'
    ];

    // Definisikan relasi dengan model Pesanan
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id');
    }

    // Definisikan relasi dengan model Buku
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id');
    }
}
