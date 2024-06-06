<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    // use HasFactory;
    protected $table = 'tb_kelurahan';
    protected $primaryKey = 'kd_kelurahan';
    public $incrementing = false;
    protected $fillable = [
        'kd_kelurahan',
        'no_kelurahan',
        'nama_kelurahan',
        'latitude',
        'longitude',
        'geojson',
    ];
    public $timestamps = false;

    public function rt()
    {
        return $this->hasMany(Rt::class, 'kelurahan_kd', 'kd_kelurahan');
    }

    public function kelahiran()
    {
        return $this->hasManyThrough(Kelahiran::class, Rt::class, 'kelurahan_kd', 'rt_kd', 'kd_kelurahan', 'kd_rt');
    }

    public function kematian()
    {
        return $this->hasManyThrough(Kematian::class, Rt::class, 'kelurahan_kd', 'rt_kd', 'kd_kelurahan', 'kd_rt');
    }
}
