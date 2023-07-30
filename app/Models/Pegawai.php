<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pegawai extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [];

    protected $table = "pegawai";

    public $incrementing = true;

    public $timestamps = false;

    protected $primaryKey = 'id_pegawai';

    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'telp',
        'password',
        'foto_profil',
        'jabatan'
    ];

    protected $hidden = [
        'password'
    ];
}
