<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepindahan extends Model
{
    // use HasFactory;
    protected $table = 'tb_kepindahan';
    protected $fillable = [
        'nama_lengkap',
        'tempat_lahir',
        'tgl_lahir',
        'goldar',
        'agama',
        'status',
        'pendidikan',
        'no_kk',
        'alamat',
        'rt_kd',
        'pindah_ke',
        'tgl_pindah',
        'alasan_pindah',
        'jenis_kelamin',
    ];
    public $timestamps = false;

    public function rt()
    {
        return $this->belongsTo(Rt::class, 'rt_kd', 'kd_rt');
    }
}
