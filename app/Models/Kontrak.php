<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontrak extends Model
{
    use HasFactory;

    protected $table = "kontrak";

    public $incrementing = true;

    public $timestamps = false;

    protected $primaryKey = 'id_kontrak';

    protected $fillable = [
        'id_mentor',
        'id_pelanggan',
        'nama_projek',
        'deskripsi_projek', 
        'waktu_kontrak',
        'tenggat_waktu',
        'total_harga',
        'status_kontrak'
    ];

    protected $hidden = [];
}
