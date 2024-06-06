<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{
    // use HasFactory;
    protected $table = 'tb_kematian';
    protected $primaryKey = 'id_kematian';
    protected $fillable = [
        'nik',
        'no_kk',
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'goldar',
        'agama',
        'status',
        'pendidikan',
        'alamat',
        'rt_kd',
        'tgl_kematian'
    ];
    public $timestamps = false;

    public function rt()
    {
        return $this->belongsTo(Rt::class, 'rt_kd', 'kd_rt');
    }
}
