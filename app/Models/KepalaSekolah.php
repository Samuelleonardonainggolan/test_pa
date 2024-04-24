<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class KepalaSekolah extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'kepala_sekolahs';

    protected $fillable = [
        'username', 'password',
    ];

    protected $hidden = [
        'password',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }
}
