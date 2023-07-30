<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = "pemesanan";

    public $incrementing = true;

    public $timestamps = false;
    
    protected $primaryKey = 'id_pemesanan';

    protected $fillable = [
        'id_pelanggan',
        'id_mentor',
        'id_pegawai',
        'id_kontrak',
        'kode_bank',
        'deskripsi_pesanan',
        'kategori',
        'status_pembayaran',
        'nama_projek',
        'deskripsi_projek',
        'status_pesanan',
        'file_projek',
        'total_harga'
    ];
}
