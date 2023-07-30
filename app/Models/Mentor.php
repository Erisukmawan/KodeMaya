<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Mentor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "mentor";

    public $incrementing = true;

    public $timestamps = false;

    protected $primaryKey = 'id_mentor';

    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'telp',
        'password',
        'foto_profil',
        'keahlian',
        'dokumen'
    ];

    protected $hidden = [
        'password'
    ];
}
