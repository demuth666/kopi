<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'harga',
        'jumlah',
        'total_harga',
        'nama_pemesan',
        'alamat_pemesan',
        'no_hp_pemesan',
        'email_pemesan',
        'status',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
