<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tendik extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model.
     *
     * @var string
     */
    protected $table = 'tendik';

    /**
     * Atribut yang dapat diisi (mass assignable).
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'email',
        'pendidikan_terakhir',
        'jurusan',
        'divisi',
    ];

    protected $casts = [
        'email' => 'string',
    ];

    public function getFotoUrlAttribute()
    {
        $foto = \DB::table('foto_tendik')->where('tendik_id', $this->id)->first();
        return $foto ? $foto->filename : 'default.jpg';
    }
}
