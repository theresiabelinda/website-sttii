<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimbingan extends Model
{
    use HasFactory;

    protected $table = 'bimbingan';

    protected $fillable = [
        'nama_mahasiswa',
        'nim',
        'judul_disertasi',
        'semester',
        'tahun_akademik',
        'pembimbing_1_id',
        'pembimbing_2_id'
    ];

    public function pembimbing1()
    {
        return $this->belongsTo(Dosen::class, 'pembimbing_1_id');
    }

    public function pembimbing2()
    {
        return $this->belongsTo(Dosen::class, 'pembimbing_2_id');
    }
}
