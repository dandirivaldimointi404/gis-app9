<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rt extends Model
{
    // use HasFactory;
    protected $table = 'tb_rt';
    protected $primaryKey = 'kd_rt';
    public $incrementing = false;
    protected $fillable = [
        'kd_rt',
        'nama_rt',
        'kelurahan_kd',
        'latitude',
        'longitude',
    ];
    public $timestamps = false;

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_kd');
    }

    public function kelahiran()
    {
        return $this->hasMany(Kelahiran::class, 'rt_kd', 'kd_rt');
    }

    public function kematian()
    {
        return $this->hasMany(Kematian::class, 'rt_kd', 'kd_rt');
    }
}
