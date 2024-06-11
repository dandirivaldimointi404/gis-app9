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
        'alamat',
        'rt_kd',
        'tgl_pindah',
        'jenis_kelamin',
        'nik'
    ];
    // public $timestamps = false;

    public function rt()
    {
        return $this->belongsTo(Rt::class, 'rt_kd', 'kd_rt');
    }
}
