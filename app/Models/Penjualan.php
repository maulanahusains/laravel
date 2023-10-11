<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_kasir',
        'id_member',
        'id_sepatu',
        'tgl_bayar',
        'bulan_bayar',
        'jumlah_bayar',
    ];

    public function Kasir() {
        return $this->belongsTo(User::class, 'id_kasir', 'id');
    }

    public function Sepatu() {
        return $this->belongsTo(Sepatu::class, 'id_sepatu', 'id');
    }

    public function Member() {
        return $this->belongsTo(Member::class, 'id_member', 'id');
    }
}
