<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Masyarakat extends Authenticatable
{
    use HasFactory;

    protected $table = 'masyarakat';

    protected $primarykey = 'nik';

    protected $fillable = [
        'nama',
        'email',
        'email_verified_at',
        'username',
        'password',
        'telp',
        'provider_id',
        'provider',
    ];

    
}
