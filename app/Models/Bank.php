<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $table = "bank";

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = 'kode_bank';

    protected $fillable = [
        'nama_bank',
        'biaya',
    ];

    protected $hidden = [];
}
