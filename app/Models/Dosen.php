<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_lengkap', 'nidn', 'nuptk', 'email',
        'link_scholar', 'link_sinta', 'foto',
        'pendidikan_s1', 'pendidikan_s2', 'pendidikan_s3'
    ];

    public function bimbingan1()
    {
        return $this->hasMany(Bimbingan::class, 'pembimbing_1_id');
    }

    public function bimbingan2()
    {
        return $this->hasMany(Bimbingan::class, 'pembimbing_2_id');
    }

    public function bukuJurnal()
    {
        return $this->hasMany(BukuJurnal::class, 'dosen_id');
    }
}
