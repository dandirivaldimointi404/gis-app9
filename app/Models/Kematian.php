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
        'nama_lengkap',
        'jenis_kelamin',
        'alamat',
        'rt_kd',
        'tgl_kematian',
        'nama_kk'
    ];
    // public $timestamps = false;

    public function rt()
    {
        return $this->belongsTo(Rt::class, 'rt_kd', 'kd_rt');
    }
}
