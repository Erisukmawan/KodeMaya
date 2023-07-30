<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pelanggan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "pelanggan";

    public $incrementing = true;

    public $timestamps = false;

    protected $primaryKey = 'id_pelanggan';

    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'telp',
        'password',
        'foto_profil'
    ];

    protected $hidden = [
        'password'
    ];
}
