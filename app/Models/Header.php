<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    protected $table = 'header';
    protected $primaryKey = 'id_header';
    protected $fillable = ['tanggal_upload','foto'];
}
