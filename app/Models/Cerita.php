<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cerita extends Model
{
    use HasFactory;

    protected $table = 'cerita';

    protected $fillable = [
        'nama',
        'angkatan',
        'pekerjaan',
        'kesan_pesan',
        'prodi',
        'foto',
    ];

    public function getFotoUrlAttribute()
    {
        if ($this->foto) {
            return asset('storage/' . $this->foto);
        }
        return asset('assets/img/default-profile.png'); // Foto default jika kosong
    }
}
