<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelahiran extends Model
{
    // use HasFactory;
    protected $table = 'tb_kelahiran';
    protected $primaryKey = 'id_kelahiran';
    protected $fillable = [
        'nik',
        'no_kk',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'golongan_darah',
        'agama',
        'status',
        'pendidikan',
        'alamat',
    ];
    public $timestamps = false;
}
