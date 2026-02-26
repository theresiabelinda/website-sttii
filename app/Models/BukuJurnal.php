<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuJurnal extends Model
{
    use HasFactory;

    protected $table = 'buku_jurnal';

    protected $fillable = ['dosen_id', 'judul', 'tipe', 'penerbit', 'tahun', 'link'];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }
}
