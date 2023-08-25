<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahunajaran extends Model
{
    protected $guarded = ['id'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
    public function madrasah()
    {
        return $this->hasMany(Madrasah::class);
    }
    public function laporan()
    {
        return $this->hasMany(Laporan::class);
    }
}
