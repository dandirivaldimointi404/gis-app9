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
        'nama',
        'jenis_kelamin',
        'tgl_lahir',
        'rt_kd',
        'alamat',
        'nama_kk',
    ];
    // public $timestamps = false;

    public function rt()
    {
        return $this->belongsTo(Rt::class, 'rt_kd', 'kd_rt');
    }

}
