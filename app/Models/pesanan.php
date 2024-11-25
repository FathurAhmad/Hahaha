<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan konvensi penamaan
    protected $table = 'pesanans';

    // Tentukan kolom yang dapat diisi massal
    protected $fillable = [
        'tanggal_pesanan',
        'pelanggan_id',
        'total_harga'
    ];

    // Definisikan relasi dengan model Pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }

    public function detailPesanans()
    {
        return $this->hasMany(DetailPesanan::class, 'pesanan_id');
    }
}
