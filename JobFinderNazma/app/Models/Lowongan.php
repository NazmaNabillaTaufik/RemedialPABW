<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    protected $table = 'lowongans';

    protected $fillable = [
        'posisi',
        'perusahaan',
        'lokasi_kerja',
        'deskripsi',
        'gaji',
    ];

    public function lamarans()
    {
        return $this->hasMany(Lamaran::class, 'lowongan_id');
    }
}