<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';

    protected $primaryKey = 'berita_id';

    protected $fillable = [
        'image', 'informasi_berita', 'informasi_alumni'
    ];
}
